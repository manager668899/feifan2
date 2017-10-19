<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Validator;

class User extends Controller
{
    public function aaa()
    {
    	echo 'aaaaaaaaaa';
    }
    public function bbb()
    {
    	echo 'bbbbbbbbb';
    }
    public function ccc(Request $request)
    {
        $data=$request->all();
        var_dump($data);
        //dd($data);
        echo '<hr/>path()';
        var_dump($request->path());
        $routes=$request->path();
        echo '<br>';
        var_dump(explode('/',$routes));

        echo '<hr/>url()';
        var_dump($request->url());
        echo '<hr/>fullUrl()';
        var_dump($request->fullUrl());
        echo '<hr/>';
        var_dump($request->isMethod('get'));
        echo '<hr/>';
        $url = route('profile');
        var_dump($url);
        echo '<hr/>';
        // $route = Route::current();
        // $name = Route::currentRouteName();
        // $action = Route::currentRouteAction();
        //var_dump($route->uri);
        //var_dump($name);
        //var_dump($action);
    }
    public function ddd(Request $request,$id='')
    {
       $data=$request->all();
       var_dump($data);
       echo $id;
    }
    public function eee()
    {
        //echo 'eee';
        return view('eee');
    }
    /*第一种验证方法*/
    public function fff(Request $request)
    {  
   

        $this->validate($request, [
        'name' => 'required|max:2',
        'pwd' => 'required'],['name.required'=>'uuuuuuu','name.max'=>'yyyyy']);
        
        $data=$request->all();
        var_dump($data); 
    }
    /*第二种验证方法*/
    public function fffa(Request $request)
    {  
        

        $vv=Validator::make($request->all(), [
        'name' => 'required|max:2',
        'pwd' => 'required'],
        ['name.required'=>'uuuuuuu','name.max'=>'yyyyy']);

        var_dump(!$vv->fails()); 
        if(!$vv->fails()){
            echo '验证通过';
        }else{
            echo '验证失败';
                $request->flashOnly(['name', 'pwd']);
                $errors=$vv->errors();
                echo $errors->first('name');
                //以下两个返回值都是可以的 在模板页面显示的位置不同
                //return redirect('eee')->withInput()->with('status', $errors);
                return redirect('eee')->withErrors($vv, 'login')->withInput();


        }

    }

}
