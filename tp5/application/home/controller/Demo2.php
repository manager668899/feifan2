<?php
namespace app\home\controller;
use think\View;
use think\Db;
use think\Request;
use think\Controller;
class Demo2 {



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

	public function eee()
	{

	    $arr=['aaa'=>'AAAA','bbb'=>'BBBB','cccc'=>'CCCC','ddddd'=>'DDDDDDDDD'];
	    //echo json_encode($arr);
	    //$this->redirect('Demo2/fff');  //页面重定向  //$this 必须继承Controller
	    //$this->success('成功了','Demo2/fff');
	    //$this->error('失败了正在回退到上一个页面');
        // redirect('http://www.baidu.com');
        header('Location:aaa'); // 原生写法 自由发挥

        //return redirect('rrr');//参数是方法的名字、注意 不能定义路由
	}

	public function fff()
	{
		echo '跳转的地址';
	}

	public function _empty()
	{
		echo '方法不存在';
	}


}