<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
    public function hhhh()
    {
        return view('index2');
    }
    public function iiii(Request $request)
    {  
        if($request->isMethod('post')){
          echo 'post';
        }
        if($request->isMethod('get')){
            echo 'get';
        }
        var_dump($request->all());
    }
    public function jjjj()
    {  
        //echo json_encode(['a'=>'aaaa','b'=>'bbbb']);
        //return ['a'=>'aaaa','b'=>'bbbb'];
        // return response('Hello World', 200)
        //           ->header('Content-Type', 'text/plain');
        //$content='ppp';
        $content=view('index2');
        return response($content,200)
                ->header('Content-Type', 'text/html')
                ->cookie('name1', 'zhangsan',36000);
    }
    public function jjjj2(Request $request)
    {
          $k=$request->cookie('name1');
          var_dump($k);
    }
    public function jjjj3()
    {
        //return redirect('jjjj');
        //return redirect()->route('jjjj');
        return redirect()->action('Demo@gggg',['id'=>1]);



    }
    public function jjjj4()
    {   
        $dd=DB::select('select * from study1');
        //var_dump($dd);
        // foreach ($dd as $key => $value) {
        //     echo $value->name;
        // }

        $arr=['a'=>'A','b'=>'B'];
        return view('demo1',['aa'=>'AAA','data'=>$arr,'dd'=>$dd]);
    }
    public function jjjj5(Request $request)
    {
        session(['key' => 'zhangsanfeng']);
        $request->session()->put('key1', 'value1');
    }
    public function jjjj6(Request $request)
    {
        $data=$request->session()->all();
        var_dump($data);
        $value = $request->session()->get('key');
        var_dump($value);

    }


}
