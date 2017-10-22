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

    public function jjjj7()
    {
        // $obj=DB::select('select * from study1');
        // ///var_dump($obj);
        // foreach ($obj as $key => $value) {
        //      echo  $value->name;
        //      echo $value->age;
        //      echo $value->class;
        // }

        //DB::insert("insert into study1 (name)value('uuuuu')");

        //$dd=DB::insert("insert into study1 (name)value(?)",['ddddddd']);
        //$dd=DB::update('update study1 set name =? where id=?',['yyyy',107]);
        //$dd=DB::delete('delete from study1 where id=?',[106]);
        $dd=DB::delete('delete from study1 where id=?',[104]);
        var_dump($dd);


    }
    public function jjjj8()
    {
        //$obj=DB::table('study1')->get();
        //dd($obj);
        echo '<pre>';
        //var_dump($obj);

        // foreach ($obj as $key => $value) {
        //     echo $value->name;
        // }

       // $obj=DB::table('study1')->where('name','你好')->first();
       // $obj=DB::table('study1')->where('name','张三')->value('class');

        //$obj=DB::table('study1')->pluck('class');
/*       $obj=DB::table('study1')->orderBy('id')->chunk(10,function ($pp){
             foreach ($pp as $key => $value) {
                 var_dump($value);
                 return;
             }
       });

       var_dump($obj);*/

      //$b=DB::table('study1')->count();
       //$b=DB::table('study1')->max('id');
       //$b=DB::table('study1')->min('id');
       //$b=DB::table('study1')->avg('age');
       //$b=DB::table('study1')->sum('age');
       //$b = DB::table('study1')->select('name', 'class as user_class','age','id')->get();
       //$b=DB::table('study1')->select('name')->distinct()->get();
       $query = DB::table('study1')->select('name');

      $b= $query->addSelect('age')->get();
      var_dump($b);

    }
    public function jjjj9()
    { 
        echo '<pre>';
        $users = DB::table('study1')
                     ->select(DB::raw('count(*) as user_count, class'))
                     ->groupBy('class')
                     ->get();
        var_dump($users);
    }
    public function jjjj10()
    {  echo '<pre>';
        $obj=DB::table('study1')->join('study','study1.id','=','study.id')->select('study1.id','study.xingming')->get();
        var_dump($obj);
    }
    public function jjjj11()
    { 
        echo '<pre>';
        $users = DB::table('study1')
            ->crossJoin('study')
            ->get();
        var_dump($users);
    }
    public function jjjj12()
    {   
        echo '<pre>';
        //$obj=DB::table('study1')->where('name','=','张三')->get();
        //$obj=DB::table('study1')->where('age','!=',18)->get();
        //$obj=DB::table('study1')->where('class','like','%足%')->get();
        //$obj=DB::table('study1')->where('id','<',10)->where('class','like','%班')->get();

        //$pp=[['id','<',10],['class','like','%班']];
        //$obj=DB::table('study1')->where($pp)->get();

        //$obj=DB::table('study1')->where('id','>',10)->orWhere('name','=','张三')->get();
        //$obj = DB::table('study1')->whereBetween('id', [10, 15])->get();
        //$obj= DB::table('study1')->whereNotBetween('id', [10, 15])->get();
        //$obj=DB::table('study1')->whereIn('id',[1,2,3])->get();
        $obj=DB::table('study1')->whereNotIn('id',[1,2,3])->get();
        var_dump($obj);
        //return $obj;
    }
    public function jjjj13()
    {   
        $data=['name'=>'AAAAA','age'=>18,'class'=>'php'];
        $dataAll=[
            ['name'=>'AAAAAQ','age'=>15,'class'=>'phpA'],
            ['name'=>'AAAAAS','age'=>19,'class'=>'phpB']
        ];

        //$c=DB::table('study1')->insert($dataAll);
        //var_dump($c);
        $id = DB::table('study1')->insertGetId($data);

        var_dump($id);
    }
    public function jjjj14()
    {   
        $data=['name'=>'BBBB','age'=>1,'class'=>'Aphp'];
        $b=DB::table('study1')->where('id',113)->update($data);
        var_dump($b);
    }
    public function jjjj15()
    {
        $b=DB::table('study1')->where('id',113)->delete();
        var_dump($b);
    }

    public function v1()
    {
        return view('index');
    }
    public function v2()
    {
        return view('v2');
    }


}
