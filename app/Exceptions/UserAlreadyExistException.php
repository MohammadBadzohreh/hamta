<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Http\Response;

class UserAlreadyExistException extends Exception
{
    public function report()
    {

    }

    public function render($request)
    {
        return response([
            "message" => $this->getMessage(),
        ], Response::HTTP_BAD_REQUEST);
    }
}
