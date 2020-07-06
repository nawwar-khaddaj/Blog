<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Tag;
use Illuminate\Contracts\Support\Renderable;
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
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @param Request $request
     * @return Renderable
     */
    public function index(Request $request)
    {
        $tags = Tag::orderBy('sort_order')->get();

        if (isset($request->selectedTag) && $request->selectedTag != 'all'){
            $selectedTag = Tag::whereSlug($request->selectedTag)->first();
            $articles = $selectedTag->articles()->where('is_published', 1);
        }elseif ($request->selectedTag === 'all'){
            $articles = Article::orderBy('sort_order')->where('is_published', 1);
            $selectedTag = 'all';
        }else{
            $articles = Article::orderBy('sort_order')->where('is_published', 1);
            $selectedTag = null;
        }

        $articles = $articles->paginate(9)->appends([
            'selectedTag' => $selectedTag === 'all' ? 'all' : ($selectedTag ? $selectedTag->slug : null),
        ]);
        return view('website.home', compact('tags', 'articles', 'selectedTag'));
    }

    public function article($slug)
    {
        $tags = Tag::orderBy('sort_order')->get();
        $article = Article::whereSlug($slug)->first();

        return view('website.article', compact('tags', 'article'));

    }
}
