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
    return view('welcome');
    
});

Route::get('foo', function () {
    //return 'Hello World';
    return redirect()->route('profile');
});

Route::get('foo1', function () {
    return 'Hello Worldttttt';
});
Route::redirect('/', '/foo', 301); //路由重定向

Route::get('user/{id?}', function ($id='8888') {
    return 'User '.$id;
});

Route::get('usera/profile', function () {
    echo 'ppppppp';
})->name('profile');

Route::get('userb/profile', 'UserController@showProfile')->name('profilea');//路由跳转到控制器
Route::get('aaa', 'User@aaa');
Route::get('bbb', 'User@bbb');
Route::get('ccc/{id?}', 'User@ccc');
Route::get('ddd/{id?}', 'User@ddd');
Route::get('eee', 'User@eee');
Route::post('fff', 'User@fff');




Route::get('sss', 'Admin\Index@sss');


