<?php

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
//    Mail::to(\App\User::find(1))->send(new \App\Mail\TestMail());

    $data = [];
    Mail::to(\App\User::find(1))->send(new \App\Mail\newPostPosted($data));
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home/home/home/home/home/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'posts', 'middleware' => ['auth', 'adminOnly']], function () {
    Route::get('/', 'PostController@index')->name('userposts.index');
    Route::get('/create', 'PostController@create')->name('userposts.create');
    Route::get('/edit/{post_id}', 'PostController@edit')->name('userposts.edit');
    Route::get('/delete/{post_id}', 'PostController@delete')->name('userposts.delete');
    Route::post('/store', 'PostController@store')->name('userposts.store');
    Route::post('/update/{post_id}', 'PostController@update')->name('userposts.update');

});




