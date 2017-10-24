<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\model\User;
use Illuminate\Support\Facades\DB;

class Index extends Controller
{
   public function aaai()
   {
   	  echo 'uuuuuuuuuuuuu';
   }
   public function aaa2()
   {
   	   $data=User::all();
   	   //dd($data);
   	   $datas=User::where('id',3)->get();
   	   $db=DB::table('study')->where('id',3)->get();
   	   //echo '<pre>';
   	   // var_dump($datas);
   	   // echo '<hr/>';
   	   // var_dump($db);
   	   // foreach ($data as $key => $value) {
   	   // 	   var_dump($value);
   	   // 	   var_dump($value->xingming);
   	   // }
   	   $hh=User::first()->toArray();
   	   var_dump($hh);


   }


}
