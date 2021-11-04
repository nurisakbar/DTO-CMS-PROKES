<?php

namespace App\Http\Controllers\Admin;

use Auth;
use App\Article;
use App\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ArticleStoreRequest;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
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
            return \DataTables::of(Article::with('category')->get())
                ->addColumn('action', function ($row) {
                    $btn = \Form::open(['url' => 'admin/article/' . $row->id, 'method' => 'DELETE', 'style' => 'float:right;margin-right:5px']);
                    $btn .= "<button type='submit' class='btn btn-danger btn-sm'><i class='fa fa-trash' aria-hidden='true'></i></button>";
                    $btn .= \Form::close();
                    $btn .= '<a class="btn btn-danger btn-sm" href="/admin/article/' . $row->id . '/edit"><i class="fas fa-edit" aria-hidden="true"></i></a>';
                    return $btn;
                })
                ->addColumn('image', function ($data) {
                    return "<img src='" . asset('storage/article/' . $data->image) . "' width='200'/>";
                })
                ->rawColumns(['action', 'image'])
                ->addIndexColumn()
                ->make(true);
        }
        return view('article.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['category'] = Category::pluck('category', 'id');
        return view('article.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArticleStoreRequest $request)
    {
        $data = $request->all();

        if ($request->hasFile('image')) {
            $file       = $request->file('image');
            $fileName   = 'image' . time() . '.' . $file->getClientOriginalExtension();
            Storage::putFileAs('public/article', $request->file('image'), $fileName);
            $data['image'] = $fileName;
        }

        $data['slug'] = Str::slug($request->title, '-');
        Article::create($data);
        \Session::flash('message', 'A new article has been added successfully');

        return redirect('admin/article');
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
        $data['article'] = Article::findOrFail($id);

        return view('article.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ArticleStoreRequest $request, $id)
    {
        $data = $request->all();
        $article = Article::findOrFail($id);

        if ($request->hasFile('image')) {
            // Delete current image
            Storage::delete('public/article/' . $article->image);
            // Create new image
            $file       = $request->file('image');
            $fileName   = 'image' . time() . '.' . $file->getClientOriginalExtension();
            Storage::putFileAs('public/article', $request->file('image'), $fileName);
            $data['image'] = $fileName;
        } else {
            $data['image'] = $article->image;
        }

        $data['slug'] = Str::slug($request->title, '-');
        $article->update($data);
        \Session::flash('message', 'successfully updated Article');
        return redirect('admin/article');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = Article::findOrFail($id);
        $article->delete();
        \Session::flash('message', 'successfully deleted article');
        return redirect('admin/article');
    }
}
