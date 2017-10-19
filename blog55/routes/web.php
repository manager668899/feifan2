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
//Route::redirect('/', '/foo', 301); //路由重定向

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
/*表单验证*/
Route::get('eee', 'User@eee');
Route::post('fff', 'User@fff');
Route::post('fffa', 'User@fffa');




Route::get('sss', 'Admin\Index@sss');


Route::get('aaaa', 'Demo@aaaa');
Route::get('bbbb/{id?}', 'Demo@bbbb');
Route::get('aaai', 'Home\Index@aaai');
Route::get('ffff', 'Demo@ffff')->middleware('CheckAge');
Route::get('home', 'Demo@gggg');
Route::get('hhhh', 'Demo@hhhh');
Route::any('iiii', 'Demo@iiii');
Route::get('jjjj', 'Demo@jjjj')->name('jjjj');
Route::get('jjjj2', 'Demo@jjjj2');
Route::get('jjjj3', 'Demo@jjjj3');

Route::get('index', function (){
	 return view('welcome');
});

Route::get('jjjj4', 'Demo@jjjj4');
Route::get('jjjj5', 'Demo@jjjj5');
Route::get('jjjj6', 'Demo@jjjj6');
