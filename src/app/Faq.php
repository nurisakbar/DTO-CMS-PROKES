<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    protected $fillable = ['title','slug','content','category_id','tags'];


    public function category()
    {
        return $this->belongsTo(\App\Category::class);
    }
}
