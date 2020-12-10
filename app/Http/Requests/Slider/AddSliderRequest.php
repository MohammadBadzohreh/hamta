<?php

namespace App\Http\Requests\Slider;

use Illuminate\Foundation\Http\FormRequest;

class AddSliderRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            "order" => "nullable|numeric",
            "title" => "required|string|min:3|max:100",
            "link" => "required|url",
            "description" => "nullable|string",
            "image" => "required",

//            todo validate image
        ];
    }
}
