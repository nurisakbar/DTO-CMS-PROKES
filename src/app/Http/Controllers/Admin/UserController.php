<?php

namespace App\Http\Controllers\Admin;

use Auth;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\UpdatePasswordRequest;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\UserCreateRequest;

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
            return \DataTables::of(User::all())
                ->addColumn('action', function ($user) {
                    $btn = \Form::open(['url' => 'admin/user/' . $user->id, 'method' => 'DELETE', 'style' => 'float:right;margin-right:5px']);
                    $btn .= "<button type='submit' class='btn btn-danger btn-sm'><i class='fa fa-trash' aria-hidden='true'></i></button>";
                    $btn .= \Form::close();
                    $btn .= '<a class="btn btn-danger btn-sm mx-1" href="user/' . $user->id . '/edit"><i class="fas fa-edit" aria-hidden="true"></i></a>';
                    //$btn .= '<a class="btn btn-danger btn-sm" href="user/' . $user->id . '/profile"><i class="fas fa-key" aria-hidden="true"></i></a>';
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
        return view('user.create');
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
        User::create($data);
        \Session::flash('message', 'Berhasil Menambahkan Data');
        return redirect()->to('admin/user');
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
    public function edit($id)
    {
        $data['user']   = User::find($id);
        return view('user.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserCreateRequest $request, $id)
    {
        $user = User::findOrFail($id);
        $data = $request->all();

        $user->update($data);
        \Session::flash('message', 'Berhasil Mengupdate Data ' . $request->name);

        return redirect('admin/user');
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
        $user->delete();
        \Session::flash('message', 'Berhasil Menghapus Data Anggota');
        return redirect('admin/user');
    }

    public function profile()
    {
        $id = Auth::user()->id;
        $data['user']   = User::find($id);
        return view('user.profile', $data);
    }

    public function updatePassword(UpdatePasswordRequest $request, $id)
    {
        $user = User::findOrFail($id);

        if (password_verify($request->current_password, $user->password)) {
            $hashNewPassword = bcrypt($request->new_password);
            $user->update(['password' => $hashNewPassword]);
            \Session::flash('message', 'Password pengguna bernama ' . $user->name . ' Berhasil diubah.');
            return redirect('admin/user');
        } else {
            \Session::flash('failed', 'Gagal ganti password pengguna. Mohon periksa kembali');
            return redirect('admin/user/' . $user->id . '/profile');
        }
    }
}
