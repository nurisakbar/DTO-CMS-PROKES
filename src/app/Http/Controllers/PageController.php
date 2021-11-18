<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use App\Category;
use App\Faq;

class PageController extends Controller
{
    public function home()
    {
        $data['categories'] = Category::all();
        return view('home.index', $data);
    }

    public function category($slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail();
        $data['articles'] = Article::where('category_id', $category->id)->get();
        $data['category'] = $category;
        return view('home.category', $data);
    }

    public function article($slug)
    {
        $data['article'] = Article::with('category')->where('slug', $slug)->first();
        return view('home.article', $data);
    }

    public function prokesUmumPengunjung()
    {
        return view('home.prokes-umum-pengunjung');
    }

    public function prokesUmumPetugas()
    {
        return view('home.prokes-umum-petugas');
    }

    public function prokesUmumPengelola()
    {
        return view('home.prokes-umum-pengelola');
    }

    public function titikKritisPenularan()
    {
        return view('home.titik-kritis-penularan');
    }

}
