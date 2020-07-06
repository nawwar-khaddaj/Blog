<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ArticleRequest;
use App\Models\Article;
use App\Models\Tag;
use App\Repositories\ArticleRepository;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ArticleController extends Controller
{
    private $articleRepository;

    public function __construct(ArticleRepository $articleRepository)
    {
        $this->articleRepository = $articleRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $articles = $this->articleRepository->getArticles();
        return view('admin.article.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        $tags = Tag::all();
        return view('admin.article.new', compact('tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param ArticleRequest $request
     * @return RedirectResponse
     */
    public function store(ArticleRequest $request)
    {
        $this->articleRepository->add($request);

        $request->session()->flash('success', 'article created successfully');

        if ($request->has('add-new'))
            return redirect()->route('admin.articles.create');

        return redirect()->route('admin.articles.index');
    }

    /**
     * Display the specified resource.
     *
     * @param Article $article
     * @return Article
     */
    public function show(Article $article)
    {
        return $article;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Article $article
     * @return Application|Factory|View
     */
    public function edit(Article $article)
    {
        $tags = Tag::all();
        return view('admin.article.edit', compact('article', 'tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param ArticleRequest $request
     * @param Article $article
     * @return RedirectResponse
     */
    public function update(ArticleRequest $request, Article $article)
    {
        $this->articleRepository->update($request, $article);

        $request->session()->flash('success', 'article updated successfully');

        if ($request->has('add-new'))
            return redirect()->route('admin.articles.create');

        return redirect()->route('admin.articles.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Request $request
     * @param Article $article
     * @return RedirectResponse
     */
    public function destroy(Request $request, Article $article)
    {
        $this->articleRepository->delete($article);
        $request->session()->flash('success', 'article deleted successfully');
        return redirect()->route('admin.articles.index');
    }
}
