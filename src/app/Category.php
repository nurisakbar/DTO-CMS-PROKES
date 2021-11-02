<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable=['category','icon','slug'];


    public function faq()
    {
        return $this->hasMany(\App\Faq::class);
    }
}
