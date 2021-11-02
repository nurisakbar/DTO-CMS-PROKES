<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Faq;

class PageController extends Controller
{
    public function home()
    {
        $data['categories'] = Category::all();
        $data['faqs']       = Faq::with('category')->limit(6)->get();
        return view('home', $data);
    }

    public function faqDetail($slug)
    {
        $data['faq']        = Faq::with('category')->where('slug', $slug)->firstOrFail();
        $tags = explode(',', $data['faq']->tags);
        $related = Faq::with('category');
        foreach ($tags as $tag) {
            $related->whereRaw('LOWER(title) like "%'.strtolower($tag).'%"');
        }
        $related->where('id', '!=', $data['faq']->id);
        $data['relateds']   = $related->limit(6)->get();
        return view('faq-detail', $data);
    }

    public function search(Request $request)
    {
        $data['faqs']       = Faq::where('title', 'like', "%".$request->keyword."%");
        $data['keyword']    = $request->keyword;
        return view('search', $data);
    }

    public function category($slug)
    {
        $data['category'] = Category::where('slug', $slug)->firstOrFail();
        return view('category', $data);
    }
}
