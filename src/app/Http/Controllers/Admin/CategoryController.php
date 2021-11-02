<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\CategoryCreateRequest;
use App\Category;
use Auth;
use App\Http\Controllers\Controller;
use Storage;
use Illuminate\Support\Str;

class CategoryController extends Controller
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
            return \DataTables::of(Category::all())
            ->addColumn('action', function ($row) {
                $btn = \Form::open(['url' => '/admin/category/'.$row->id, 'method' => 'DELETE','style'=>'float:right;margin-right:5px']);
                $btn .= "<button type='submit' class='btn btn-danger btn-sm'><i class='fa fa-trash' aria-hidden='true'></i></button>";
                $btn .= \Form::close();
                $btn .= '<a class="btn btn-danger btn-sm" href="/admin/category/'.$row->id.'/edit"><i class="fas fa-edit" aria-hidden="true"></i></a>';
                return $btn;
            })
            ->addColumn('icon', function ($row) {
                return "<img src='".asset('storage/'.$row->icon)."' width='50'>";
            })
            ->rawColumns(['action','icon'])
            ->addIndexColumn()
            ->make(true);
        }
        return view('category.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryCreateRequest $request)
    {
        $data = $request->all();
        if ($request->hasFile('icon')) {
            $file       = $request->file('icon');
            $fileName   = 'icon'.time().'.'.$file->getClientOriginalExtension();
            Storage::putFileAs('public', $request->file('icon'), $fileName);
            $data['icon'] = $fileName;
        }
        $data['slug'] = Str::slug($request->category, '-');
        Category::create($data);
        \Session::flash('message', 'a new category has been added successfully');
        return redirect('admin/category');
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
        $data['category']   = Category::findOrFail($id);
        return view('category.edit', $data);
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
        $category = Category::findOrFail($id);
        $data = $request->all();
        if ($request->hasFile('icon')) {
            $file       = $request->file('icon');
            $fileName   = 'icon'.time().'.'.$file->getClientOriginalExtension();
            Storage::putFileAs('public', $request->file('icon'), $fileName);
            $data['icon'] = $fileName;
        }
        $data['slug'] = Str::slug($request->category, '-');
        $category->update($data);
        \Session::flash('message', 'successfully updated category');
        return redirect('admin/category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        \Session::flash('message', 'successfully deleted category');
        return redirect('admin/category');
    }
}
