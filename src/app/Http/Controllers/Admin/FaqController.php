<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\FaqCreateRequest;
use App\Faq;
use App\Category;
use Auth;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;

class FaqController extends Controller
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
            return \DataTables::of(Faq::with('category')->get())
            ->addColumn('action', function ($row) {
                $btn = \Form::open(['url' => 'admin/faq/'.$row->id, 'method' => 'DELETE','style'=>'float:right;margin-right:5px']);
                $btn .= "<button type='submit' class='btn btn-danger btn-sm'><i class='fa fa-trash' aria-hidden='true'></i></button>";
                $btn .= \Form::close();
                $btn .= '<a class="btn btn-danger btn-sm" href="/admin/faq/'.$row->id.'/edit"><i class="fas fa-edit" aria-hidden="true"></i></a>';
                return $btn;
            })
            ->rawColumns(['action'])
            ->addIndexColumn()
            ->make(true);
        }
        return view('faq.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['category'] = Category::pluck('category', 'id');
        return view('faq.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FaqCreateRequest $request)
    {
        $request['slug'] = Str::slug($request->title, '-');
        Faq::create($request->all());
        \Session::flash('message', 'a new FAQ has been added successfully');
        return redirect('admin/faq');
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
        $data['category'] = Category::pluck('category', 'id');
        $data['faq'] = Faq::findOrFail($id);
        return view('faq.edit', $data);
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
        $faq = Faq::findOrFail($id);
        $request['slug'] = Str::slug($request->title, '-');
        $faq->update($request->all());
        \Session::flash('message', 'successfully updated FAQ');
        return redirect('admin/faq');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $faq = Faq::findOrFail($id);
        $faq->delete();
        \Session::flash('message', 'successfully deleted faq');
        return redirect('admin/faq');
    }
}
