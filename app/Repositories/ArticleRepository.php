<?php

namespace App\Repositories;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ArticleRepository {

    public function __construct()
    {
    }

    public function add(Request $request)
    {
        $articleData = [];
        foreach (config('translatable.locales') as $locale){
            if ($request->get('title:' . $locale) != null)
                $articleData[$locale] =  [
                    'body' => $request->input('body:'. $locale),
                    'title' => $request->input('title:'. $locale)
                ];
        }
        $articleData['slug'] = $request->get('slug');
        $articleData['is_published'] = $request->get('is_published');

        $article = new Article($articleData);

        if ($request->hasFile('images')){
            $imagesNames = array();
            foreach ($request->file('images') as $image) {
                $imageName = Storage::disk('public')->put('articles', $image);
                array_push($imagesNames, $imageName);
            }

            $article->images = $imagesNames;
        }
        $article->admin()->associate(Auth::user());
        $article->save();
        $article->tags()->attach($request->tags);
    }

    public function update(Request $request, Article $article)
    {
        $articleData = [];
        foreach (config('translatable.locales') as $locale){
            if ($request->get('title:' . $locale) != null)
                $articleData[$locale] =  [
                    'body' => $request->input('body:'. $locale),
                    'title' => $request->input('title:'. $locale)
                ];
        }

        if ($request->hasFile('images')){
            // if there is an old image delete it
            if ($article->images != null){
                foreach ($article->images as $image){
                    Storage::disk('public')->delete($image);
                }
            }

            // store the new images
            $imagesNames = array();
            foreach ($request->file('images') as $image) {
                $imageName = Storage::disk('public')->put('articles', $image);
                array_push($imagesNames, $imageName);
            }

            $article->images = $imagesNames;
        }

        if ($request->has('slug'))
            $articleData['slug'] = $request->get('slug');

        $articleData['is_published'] = $request->get('is_published') ?? 0;


        $article->tags()->detach();
        $article->tags()->attach($request->tags);

        $article->update($articleData);

    }

    public function delete(Article $article)
    {
        if ($article->image != null)
            $article->image = Storage::disk('local')->delete($article->image);

        $article->delete();
    }

    public function getArticles()
    {
        return Article::orderBy('sort_order')->get();
    }

}
