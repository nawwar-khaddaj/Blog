<?php

namespace App\Models;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Article extends Model implements TranslatableContract
{
    use Translatable;

    protected $fillable = ['sort_order', 'slug', 'images', 'is_published'];
    public $translatedAttributes = ['title', 'body'];

    protected $casts = [
      'images' => 'array'
    ];

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }

}
