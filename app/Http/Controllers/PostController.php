<?php

namespace App\Http\Controllers;

use App\Http\Requests\Post\postListRequest;
use App\Models\Post;

class PostController extends Controller
{
    public function postsList(postListRequest $request)
    {
        return Post::all();
    }
}
