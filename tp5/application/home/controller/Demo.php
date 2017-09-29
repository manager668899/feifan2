<?php
namespace app\home\controller;
use think\Controller;
class Demo extends Controller
{
   public function demo1()
   {  
       $this->assign('aaa','AAA');
       $this->assign('arr',['sss','hhh','iii','ooo']);



   	    return $this->fetch('demo1');


   	  /*
   	    如果使用助手函数view 则不需要继承Controller
   	  */

   	    // return view('demo1');


   }
   public function url()
   {
   	  var_dump( $_POST);
   }


   public function demo2()
   {
   	  
   }

   public function demo3()
   {
   	  /*自定义函数是在common.php文件下定义   模板中使用函数则需要加 : 控制器中则不需要*/
   	   sssa();
   }

}