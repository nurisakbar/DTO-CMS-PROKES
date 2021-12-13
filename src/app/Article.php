<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['title', 'slug', 'content', 'category_id', 'tags', 'image','content_eng','title_eng'];


    public function category()
    {
        return $this->belongsTo(\App\Category::class);
    }
}
