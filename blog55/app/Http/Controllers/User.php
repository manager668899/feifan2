<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
    public function fff(Request $request)
    {
        $data=$request->all();
       var_dump($data); 
    }

}
