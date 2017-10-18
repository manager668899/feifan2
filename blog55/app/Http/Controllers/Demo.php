<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Demo extends Controller
{
    public function aaaa()
    {
    	echo 'aaaa';
    }
    public function bbbb(Request $request,$id='')
    {
    	//echo 'bbbbb';
    	echo $id;
    	var_dump($request->all());

    	echo '<hr/>';
    	var_dump($_GET);
    	echo '<hr/>';
        var_dump($request->input('aaa'));
        echo '<hr/>';
        var_dump($request->path());
        echo '<hr/>';
        var_dump($request->url()) ;
        echo '<hr/>';
        var_dump( $request->isMethod('post'));
           if($request->isMethod('get')){
                echo 'get';
           }else{
           	    echo 'post';
           }
        $input = $request->only(['name', 'pwd']);
        //dd($input);
        var_dump($input);
        echo '<hr/>';
       var_dump($request->has('name'));
        var_dump($request->filled('name'));

    }
    public function ffff()
    {
        echo 'fffffffff';
    }
    public function gggg()
    {
        echo 'gggggggg';
    }


}
