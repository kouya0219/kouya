<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
if ( ! App::environment('local')) {
    URL::forceSchema('https');
}


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    /**
    * ログイン
    */
    Route::controller('auth/login', 'Auth\AuthController');

    /**
    * パスワードリセット
    */
    Route::controller('auth/password/reset/{token}', 'Auth\PasswordController');



    Route::get('/', function () {
        return redirect('/articles');
    });

    Route::resource('/articles', 'ReportsController');

    Route::resource('/articles/{report_id}/comments', 'CommentsController');

    Route::resource('/users', 'UsersController');


});
