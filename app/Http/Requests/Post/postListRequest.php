<?php

namespace App\Http\Requests\Post;

use Illuminate\Foundation\Http\FormRequest;

class postListRequest extends FormRequest
{

    public function authorize()
    {
        return auth()->check() == true;
    }

    public function rules()
    {
        return [

        ];
    }
}
