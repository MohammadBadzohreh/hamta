<?php

namespace App\Http\Requests\Slider;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;

class GetAllSlidersRequest extends FormRequest
{

    public function authorize()
    {
//        todo :  fix auth api sliders list
        return true;
        return auth()->user()->access_level === User::USER_SUPER_ADMIN;
    }

    public function rules()
    {
        return [
            //
        ];
    }
}
