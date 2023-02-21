<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view('pages/index');
    }

    public function show($slug)
    {
        $article = Article::where('slug',$slug)->firstOrFail();
        return view('pages/content', ['article' => $article]);
    }
}
