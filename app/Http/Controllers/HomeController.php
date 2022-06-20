<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function addArticle(Request $request)
    {

        Article::create([
            "title" => $request->title,
            "article" => $request->article,
        ]);

        return redirect()->back();
    }

    public function getArticle()
    {

        $articles = Article::take(3)->get();
        return view('mainPage', compact('articles'));

        // dd($article);
    }

    public function AllArticles()
    {
        $articles = Article::paginate(3);
        return view("allArticles", compact('articles'));
    }
}