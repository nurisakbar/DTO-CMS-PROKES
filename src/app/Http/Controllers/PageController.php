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
}
