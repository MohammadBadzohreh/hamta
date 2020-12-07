<?php

namespace App\Http\Controllers;

use App\Http\Requests\Slider\GetAllSlidersRequest;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function slideslist(GetAllSlidersRequest $request)
    {
        $sliders = Slider::all();
        return $sliders;
    }
}
