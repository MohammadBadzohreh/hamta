<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\ChangeEmailRequest;
use App\Http\Requests\User\ChangeEmailSubmitRequest;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{
    public function changeEmail(ChangeEmailRequest $request)
    {
        try {
            $key = "confirmation_code_" . auth()->id();
            $expiration_time = now()->addMinutes(3);
            $data = [
                "email" => $request->email,
                "code" => random_int(1000, 9999),
            ];
            Cache::put($key, $data, $expiration_time);
            Log::info("ypur code is" . $data["code"]);
//            todo ersal code be email
            return response(["message" => "کد فعال سازی برای شما ارسال گردید."], Response::HTTP_OK);
        } catch (\Exception $exception) {
            Log::error($exception);
            return response(["message" => "خطایی در سرور رخ داده است."], Response::HTTP_OK);
        }
    }

    public function changeEmailSubmit(ChangeEmailSubmitRequest $request)
    {
        $data = Cache::get("confirmation_code_" . auth()->id());
        if (empty($data) && $data["code"] != $request->code) {
            return response([
                "message" => "کد وارد شده اشتباه است و یا منقضی شده است.",
            ], Response::HTTP_BAD_REQUEST);

        }
        auth()->user()->email = $data["email"];
        auth()->user()->save();
        return response(["message" => "ایمیل شما با موفقیت تغییر یافت."], Response::HTTP_OK);
    }

    public function changePassword(ChangePasswordRequest $request)
    {
        try {
            $user = auth()->user();

            if (!Hash::check($request->input('old_password'), $user->password)) {
                return response(['message' => 'گذرواژه وارد شده مطابقت ندارد'], 400);
            }

            $user->password = bcrypt($request->input('new_password'));
            $user->save();

            return response(['message' => 'گذرواژه شما با موفقیت تغییر یافت'], 200);

        } catch (\Exception $exception) {
            Log::error($exception);
        }

    }
}
