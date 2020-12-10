<?php

namespace App\Http\Controllers;

use App\Http\Requests\Slider\AddSliderRequest;
use App\Http\Requests\Slider\editSliderRequest;
use App\Http\Requests\Slider\GetAllSlidersRequest;
use App\Models\Slider;
use http\Exception;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class SliderController extends Controller
{
    public function slideslist(GetAllSlidersRequest $request)
    {
        $sliders = Slider::all();
        return $sliders;
    }

    public function add(AddSliderRequest $request)
    {
//        todo upload image to server
        $slider = Slider::query()->create([
            "order" => $request->order,
            "title" => $request->title,
            "link" => $request->link,
            "description" => $request->description,
            "image" => $request->image,
        ]);
        return $slider;
    }

    public function edit(editSliderRequest $request)
    {
//        todo save image
        try {
            DB::beginTransaction();
            $slider = Slider::findOrFail($request->id);
            $slider->update([
                "order" => $request->order,
                "title" => $request->title,
                "link" => $request->link,
                "description" => $request->description,
                "image" => $request->image,
            ]);
            DB::commit();
            return $slider;
        } catch (Exception $exception) {
            DB::rollBack();
            return response(["message" => "خطایی در سرور رخ داده است."],
                Response::HTTP_INTERNAL_SERVER_ERROR);
        }


    }
}
