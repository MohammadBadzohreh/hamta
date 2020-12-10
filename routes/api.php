<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//auth routes
Route::group([], function ($router) {

    $router->group(['namespace' => '\Laravel\Passport\Http\Controllers'], function ($router) {
        $router->post('login', [
            'as' => 'auth.login',
            'uses' => 'AccessTokenController@issueToken',
            'middleware' => ['throttle']
        ]);
    });

    $router->group(["namespace" => "App\Http\Controllers"], function ($router) {
        $router->post("/register", [
            "uses" => "AuthController@register",
            "as" => "auth.register",
        ]);
        $router->post("/verify", [
            "uses" => "AuthController@verify",
            "as" => "auht.verify",
        ]);
        $router->post("/resned-verification-code", [
            "uses" => "AuthController@resnedVerificationCode",
            "as" => "auht.resend.verification.code",
        ]);
    });
});
//user routes
Route::group([], function ($router) {
    $router->group(["namespace" => "App\Http\Controllers", "middleware" => ["auth:api"]], function ($router) {
        $router->post("/change-email", [
            "uses" => "UserController@changeEmail",
            "as" => "user.change.email",
        ]);
        $router->post("/change-email-submit", [
            "uses" => "UserController@changeEmailSubmit",
            "as" => "user.change.email.submit",
        ]);

        $router->post("/change-password", [
            "uses" => "UserController@changePassword",
            "as" => "user.change.password",
        ]);

        $router->get("/manager/auth", [
            "uses" => "UserController@manager",
            "as" => "auth.manager",
        ]);

        $router->get("/manager/studentslist", [
            "uses" => "UserController@studentList",
            "as" => "student.list",
        ]);


        $router->get("/manager/teacherslist", [
            "uses" => "UserController@teacherList",
            "as" => "teacher.list",
        ]);


    });
});

//slider routes

Route::group(["namespace" => "App\Http\Controllers"], function ($router) {
    Route::group(["middleware" => ["auth:api"]], function ($router) {
        $router->get("/slideslist", [
            "uses" => "SliderController@slideslist",
            "as" => "slideslist.all",
        ]);

        $router->post("/manager/addSlider", [
            "uses" => "SliderController@add",
            "as" => "slide.add",
        ]);

        $router->patch("/manager/slider/{id}", [
            "uses" => "SliderController@edit",
            "as" => "slide.edit",
        ]);

    });
});
//posts routes


Route::group(["namespace" => "App\Http\Controllers"], function ($router) {
    $router->get("/manager/viewpost/{id}",[
        "uses" => "PostController@view",
        "as" => "post.view",
    ]);
    Route::group(["middleware" => ["auth:api"]], function ($router) {
        $router->get("/postslist", [
            "uses" => "PostController@postsList",
            "as" => "post.list",
        ]);

    });


});


//school routes


Route::group(["namespace" => "App\Http\Controllers"], function ($router) {
    Route::group(["middleware:" => ["auth:api"]], function ($router) {
        $router->get("/schoolInfo/{school}", [
            "uses" => "SchoolController@info",
            "as" => "school.name",
        ]);
    });
});


Route::group(["namespace" => "App\Http\Controllers"], function ($router) {
    Route::group(["middleware" => ["auth:api"]], function ($router) {

        $router->get("/manager/classeslist", [
            "uses" => "ClassController@all",
            "as" => "class.list",
        ]);
    });

});

