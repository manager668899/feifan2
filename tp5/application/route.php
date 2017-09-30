<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

use think\Route;
Route::get('aaa','home/Index/index');//aaa相当于自定义的名字 'home/Index/index' 实际的路径
Route::get('aaa2','home/Index/index2');
Route::get('demo1/[:id]','home/Index/demo1');//可选
Route::get('demo1a/:id','home/Index/demo1');//必选参数
Route::get('demo2/[:ss]','home/Index/demo2');//可选参数
Route::get('demo3/[:ss]','home/Index/demo3');//可选参数
Route::get('demo4/[:ss]','home/Index/demo4');//可选参数
Route::get('demo5/[:ss]','home/Index/demo5');//可选参数
Route::get('demo6','home/Index/demo6');//可选参数
Route::get('demo7','home/Index/demo7');//可选参数
Route::get('demo8','home/Index/demo8');

Route::get('demoa1','home/Demo/demo1');
Route::post('demoa2','home/Demo/demo2');
Route::get('demoa3','home/Demo/demo3');


Route::get('demob1','home/Demo2/aaa');
Route::get('demob2','home/Demo2/bbb');
Route::post('ccc/[:id]','home/Demo2/ccc');
Route::get('ddd','home/Demo2/ddd');
Route::get('eee','home/Demo2/eee');
Route::get('ggg','home/Demo2/ggg');
Route::get('hhh','home/Demo2/hhh');


return [
    '__pattern__' => [
        'name' => '\w+',
    ],
    '[hello]'     => [
        ':id'   => ['index/hello', ['method' => 'get'], ['id' => '\d+']],
        ':name' => ['index/hello', ['method' => 'post']],
    ],

];
