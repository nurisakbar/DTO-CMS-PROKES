<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserCreateRequest;
use App\User;
use App\Group;
use Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $user =  \DB::table('users_view');
            if ($request->role=='object_survey') {
                $user =$user->whereIn('role', ['user','fakultas','dosen','object_survey']);
            } else {
                $user = $user->where('role', 'responden');
            }
            return \DataTables::of($user)
            ->addColumn('group', function ($user) {
                return $user->fakultas.' / '.$user->prodi;
            })
          ->addColumn('action', function ($user) {
              $btn = \Form::open(['url' => 'user/'.$user->id, 'method' => 'DELETE','style'=>'float:right;margin-right:5px']);
              $btn .= "<button type='submit' class='btn btn-danger btn-sm'><i class='fa fa-trash' aria-hidden='true'></i></button>";
              $btn .= \Form::close();
              $btn .='<a class="btn btn-danger btn-sm" href="/user/'.$user->id.'/edit?role='.$user->role.'"><i class="fas fa-edit" aria-hidden="true"></i></a>';
              return $btn;
          })
          ->rawColumns(['action'])
          ->addIndexColumn()
          ->make(true);
        }
        return view('user.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $data['group']  = $this->listGroup($request);
        $data['title']  = $request->role=='responden'?'Responden':'Object Survey';
        return view('user.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserCreateRequest $request)
    {
        $data               = $request->all();
        $data['password']   = Hash::make($request->password);
        $data['user_id']    = Auth::user()->id;
        User::create($data);
        \Session::flash('message', 'Berhasil Menambahkan Data');
        $role = $request->role=='responden'?'responden':'object_survey';
        return redirect('user?role='.$role);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Request $request)
    {
        $data['user']   = User::find($id);
        $data['group']  = $this->listGroup($request);
        $data['subGroup'] = Group::where('group_id', '!=', null)->pluck('nama_group', 'id');
        $data['title']  = $request->role=='responden'?'Responden':'Object Survey';
        return view('user.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $data = $request->all();
        if ($request->password!=null) {
            $data['password'] = Hash::make($request->password);
        } else {
            unset($data['password']);
        }
        $user->update($data);
        \Session::flash('message', 'Berhasil Mengupdate Data '.$request->name);
        $role = $request->role=='responden'?'responden':'object_survey';
        if ($request->has('page')) {
            return redirect('profile');
        }
        return redirect('user?role='.$role);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $role = $user->role;
        $user->delete();
        \Session::flash('message', 'Berhasil Menghapus Data Anggota');
        return redirect('user?role='.$role);
    }


    public function listGroup($request)
    {
        \Log::info($request);
        if (Auth::user()->group=='owner') {
            $listGroup = ['institusi'=>'institusi','owner'=>'owner'];
        } else {
            if ($request->role=='responden') {
                $group = Group::where('group_id', '=', null)->where('jenis', '!=', 'layanan');
            } else {
                $group = Group::where('group_id', '=', null);
            }
            $listGroup = $group->pluck('nama_group', 'id');
        }
        return $listGroup;
    }

    public function profile()
    {
        $id = Auth::user()->id;
        $data['user']   = User::find($id);
        return view('user.profile', $data);
    }
}
