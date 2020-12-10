<?php

namespace App\Http\Controllers;


use App\Http\Requests\School\GetSchollListRequest;
use App\Models\School;

class SchoolController extends Controller
{
    public function info(GetSchollListRequest $request)
    {
        $school = School::query()
            ->find($request->school)->with("contacts")->get();
        return $school;
    }
}
