<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class VerifyRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            "code" => "required|numeric|min:1000|max:9999",
            "email" => "required|email|exists:users,email",
        ];
    }
}
