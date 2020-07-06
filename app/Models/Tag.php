<?php

namespace App\Models;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model implements TranslatableContract
{
    use Translatable;

    protected $fillable = ['sort_order', 'slug'];
    public $translatedAttributes = ['title'];
    protected $appends = ['ArticleCount'];

    public function articles()
    {
        return $this->belongsToMany(Article::class);
    }

    public function getArticleCountAttribute()
    {
        return count($this->articles()->where('is_published', 1)->get());
    }


}
