<?php
namespace app\home\controller;
use think\View;
use think\Db;
use think\Request;
class Demo2{



	public function aaa()
	{
		echo 'uuuu';
		return view('aaa',['sss'=>'SSSS','bbb'=>'BBBB','ccc'=>['cccc','vvvv','jjjj']]);
	}

	public function bbb()
	{   
		 $arr=Db::table('study1')->select();
		 $view=new View();

		 return $view->fetch('bbb',['aaaa'=>'jjjjj','data'=>$arr,'id'=>3]);
	}

	public function ccc(Request $request,$id='')
	{
       $data=$request->param();
       var_dump($data);
	}

	public function ddd()
	{
		// {$Think.server.script_name} // 输出$_SERVER['SCRIPT_NAME']变量
		// {$Think.session.user_id} // 输出$_SESSION['user_id']变量
		// {$Think.get.pageNumber} // 输出$_GET['pageNumber']变量
		// {$Think.cookie.name}  // 输出$_COOKIE['name']变量
		 $view=new View();

		 return $view->fetch('ddd');
	}


}