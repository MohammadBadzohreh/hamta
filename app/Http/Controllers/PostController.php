<?php

namespace App\Http\Controllers;

use App\Http\Requests\Post\postListRequest;
use App\Models\Post;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PostController extends Controller
{
    public function postsList(postListRequest $request)
    {
        return Post::all();
    }

    public function view(Request $request)
    {
        try {
            $post = Post::query()->findOrFail($request->id);
            return $post;
        } catch (\Exception $exception) {

            if ($exception instanceof ModelNotFoundException) {
                return response(["message" => "پست مورد نظر یافت نشد."],
                    Response::HTTP_NOT_FOUND);
            }
            return response(["message" => "خطایی در سرور رخ داده است."],
                Response::HTTP_INTERNAL_SERVER_ERROR);
        }

    }
}
