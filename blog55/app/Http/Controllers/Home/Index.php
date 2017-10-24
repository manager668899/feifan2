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
   	   //$data=User::all();
   	   //dd($data);
   	   //$datas=User::where('id',3)->get();
   	   //$db=DB::table('study')->where('id',3)->get();
   	   //echo '<pre>';
   	   // var_dump($datas);
   	   // echo '<hr/>';
   	   // var_dump($db);
   	   // foreach ($data as $key => $value) {
   	   // 	   var_dump($value);
   	   // 	   var_dump($value->xingming);
   	   // }
   	  // $hh=User::first()->toArray();
         //$data1=User::where('id',3)->first();
         //echo '<pre>';
   	   //var_dump($data1);

         /*
          新增 
          $obj=new User();
          $obj->xingming='yyyyy';
          $obj->save();
        */
          echo '<pre>';
      /*  修改
          $obj=User::find(11);
          //var_dump($obj);
          $obj->xingming='这里做更新';
          $obj->city='内蒙';
          $obj->save();*/

          /*
          删除
          $obj=User::find(11);
          $obj->delete();*/

   }





}
