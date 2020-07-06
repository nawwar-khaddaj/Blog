<?php

namespace App\Repositories;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagRepository {

    public function __construct()
    {
    }

    public function add(Request $request)
    {
        $tagData = [];
        foreach (config('translatable.locales') as $locale){
            if ($request->get('title:' . $locale) != null)
                $tagData[$locale] =  [
                    'title' => $request->input('title:'. $locale),
                ];
        }
        $tagData['slug'] = $request->get('slug');

        $tag = new Tag($tagData);
        $tag->save();
    }

    public function update(Request $request, Tag $tag)
    {
        $tagData = [];
        foreach (config('translatable.locales') as $locale){
            if ($request->get('title:' . $locale) != null)
                $tagData[$locale] =  [
                    'title' => $request->input('title:'. $locale),
                ];
        }
        if ($request->has('slug'))
            $tagData['slug'] = $request->get('slug');

        $tag->update($tagData);
    }

    public function delete(Tag $tag)
    {
        $tag->delete();
    }

    public function getTags()
    {
        return Tag::orderBy('sort_order')->get();
    }

}
