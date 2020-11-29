<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/user','WhiteCardController@index');
// Route::group(['middleware' => ['web']], function () {
    Route::get('/whitecard', 'WhiteCardController@index');
    Route::post('/whitecard', 'WhiteCardController@store');
    Route::get('test', 'WhiteCardController@test');

    Route::get('student', 'StudentController@index');

    Route::get('admin', 'AdminController@index');

    // Route::post('addWhitecard', 'WhiteCardController@store');
// });
