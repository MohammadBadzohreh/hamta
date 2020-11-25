<?php

namespace App\Http\Controllers;

use App\Exceptions\UserAlreadyExistException;
use App\Http\Requests\User\RegisterRequest;
use App\Http\Requests\User\ResendVerificationCodeRequest;
use App\Http\Requests\User\VerifyRequest;
use App\Models\User;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{
    public function register(RegisterRequest $request)
    {
        try {
            $code = random_int(1000, 9999);
            $user = User::query()->where("email", $request->email)->first();
            if ($user) {
                if ($user->verified_code) {
                    throw new UserAlreadyExistException("کاربر با این مشخصات وجود دارد.");
                }
                return response(["message" => "کد فعال سازی قبلا برای شما ارسال شده است."], Response::HTTP_OK);
            }
            User::create([
                "email" => $request->email,
                "verified_code" => $code,
            ]);
//        todo send email to user
            Log::info("code is" . $code);
            return response(["message" => "کاربر به طور موقت ثبت شد."],
                Response::HTTP_OK);
        } catch (\Exception $exception) {
            throw $exception;
            Log::error($exception);
            if ($exception instanceof UserAlreadyExistException) {
                throw $exception;
            }
            return response([
                "message" => "خطایی در سرور رخ داده است."
            ],
                Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function verify(VerifyRequest $request)
    {
        $user = User::query()->where([
            "email" => $request->email,
            "verified_code" => $request->code,
        ])->first();
        if (empty($user)) {
            throw new ModelNotFoundException("کاربر با این مشخصات یافت نشد.");
        }
        $user->verified_code = null;
        $user->verified_at = now();
        $user->save();
        return response($user,
            Response::HTTP_OK);
    }

    public function resnedVerificationCode(ResendVerificationCodeRequest $request)
    {
        $user = User::query()->where("email", $request->email)
            ->whereNull("verified_at")
            ->first();
        if (!empty($user)) {
            $code = random_int(1000, 9999);
            $user->verified_code = $code;
            $user->save();
            return response(["message" => "کد فعال سازی برای مجددا ارسال شد."],
                Response::HTTP_OK);
        };
        throw new ModelNotFoundException("کاربر فعال است و یا ثبت نام نکرده است.");
    }

}
