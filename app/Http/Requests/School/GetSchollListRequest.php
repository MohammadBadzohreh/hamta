<?php

namespace App\Http\Requests\School;

use Illuminate\Foundation\Http\FormRequest;

class GetSchollListRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            //
        ];
    }
}
