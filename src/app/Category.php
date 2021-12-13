<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable=['category','icon','slug','description','category_eng'];


    public function faq()
    {
        return $this->hasMany(\App\Faq::class);
    }
}
