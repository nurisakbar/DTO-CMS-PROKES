<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title'             =>  'required',
            'title_eng'         =>  'required',
            'content'           =>  'required',
            'content_eng'       =>  'required',
            'tags'              => 'required',
            'image'             =>  'image|mimes:jpg,png,jpeg|max:2048'
        ];
    }
}
