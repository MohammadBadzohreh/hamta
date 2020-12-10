<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class getStudentListRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [

        ];
    }
}
