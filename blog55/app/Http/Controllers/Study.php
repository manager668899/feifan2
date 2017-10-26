<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\model\Demo;

class Study extends Controller
{
    public function s1()
    {
       $data=DB::table('study1')->get();
       return view('study.lista',['data'=>$data]);
    }
    public function ecd(Request $request)
    {  
    	if($request->isMethod('get')){
    		    	//$id=$request->all();
    	$ids=$request->input('id');
    	//$idsa=$request->only('id');
    	$data=DB::table('study1')->where('id',$ids)->first();
    	//var_dump($data);
    	return view('study.ecd',['data'=>$data]);
      }else{
         $datas=$request->all();
         //var_dump($datas);
         $datay=$request->only(['name','age','sex','relish','class']);
         $bool=DB::table('study1')->where('id','=',$datas['id'])->update($datay);
         //var_dump($bool);
         if($bool){
            return  json_encode(['status'=>1]);
         }
         
      }


    }
    public function ecd2()
    {
        $data=Demo::all();
        //dd($data);
        $datas=Demo::get()->toArray();
        echo '<pre>';
        var_dump($datas);
        $dd=DB::select('select * from study1');
        echo '<hr/>';
        var_dump($dd);
    }
}
