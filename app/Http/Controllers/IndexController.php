<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Banner;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $banner = Banner::first();
        return view('pages/index',compact('banner'));
    }

    public function show($slug)
    {
        $banner = Banner::first();
        $article = Article::where('slug',$slug)->firstOrFail();
        return view('pages/content', ['article' => $article, 'banner' => $banner]);
    }
}
