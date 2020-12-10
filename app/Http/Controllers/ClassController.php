<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClassRoom\ClassListRequest;
use App\Models\ClassRoom;

class ClassController extends Controller
{
    public function all(ClassListRequest $request)
    {
//        todo add student
        $classes = ClassRoom::query()
            ->leftJoin("users", "classes.teacher_id", "=", "users.id")
            ->get(["classes.*", "users.id", 'users.name as teacher_name']);
        return $classes;
    }
}
