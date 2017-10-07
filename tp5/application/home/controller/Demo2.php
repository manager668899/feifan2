<?php
namespace app\home\controller;
use think\View;
use think\Db;
use think\Request;
use think\Controller;
use think\Session;
use think\Cookie;
use think\Validate;
use app\home\model\User;
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
	public function ggg()
	{  
	
		return view();
	}

	/*验证码和验证*/
	public function hhh(Request $request)
	{   
		$data=$request->param();
		//var_dump($data);


			//$captcha="dddd";
		 if(!captcha_check($data['yanzheng'])){
			    echo '失败';
			}else{
				//echo '验证码成功';
				$validate = new Validate([
                    'name'=>'require|max:20',
                    'age'=>'require|number|between:1,120|integer',
				  ],['name.max'=>'uuuuuuuuuuuuuu','name.require'=>'不能是空','age.between'=>'年龄必须是在1-120岁']);
				if($validate->check($data)){
					echo '成功';

				}else{
					var_dump( $validate->getError());
				}
			};

	}





	public function iii()
	{
		Session::set('name','thinkphp');
		Cookie::set('name1','thinkphp1',3600);
	}
	public function jjj()
	{
	   echo Session::get('name');
	   echo Cookie::get('name1');
	}
	public function kkk()
	{ 
		$res=Db::table('study1')->paginate(2);
		// dump($res);
		// die;
		$page = $res->render();
		return view('kkk',['res'=>$res,'page'=>$page]);
	}
	public function lll()
	{
		return view();
	}
	public function mmm()
	{
		 $file = request()->file('image');
		 //dump($file);
		 if($file){
        $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
		        if($info){
		            // 成功上传后 获取上传信息
		            // 输出 jpg
		            echo $info->getExtension();
		            // 输出 20160820/42a79759f284b767dfcb2a0197904287.jpg
		            echo $info->getSaveName();
		            // 输出 42a79759f284b767dfcb2a0197904287.jpg
		            echo $info->getFilename(); 
		        }else{
		            // 上传失败获取错误信息
		            echo $file->getError();
		        }
		    }

	}


/*模型层的使用*/
	public function nnn()
	{
		$mm =model('User'); //使用的是助手函数控制器和模型连接 返回对象
		$arr=$mm->select();

		foreach ($arr as $key => $value) {
			echo $value->name;
		}
		echo '<hr/>';

        $ss=new User(); //另一种是使用use导入
        $sss=$ss->select();
        foreach ($sss as $key => $value) {
			 echo $value->name;
		}


	

	}
	public function ooo()
	{
		// 	$res=User::all(1);
		// 	foreach ($res as $key => $value) {
		// 	 echo $value->name;
		// }


		// $user=new User();
		// $user->name='uuuuyyyy';
		// $user->age='88';
		// $user->class='2uuuuyyyy';
		// $user->save();

       /*控制器调用模型做数据的处理*/
		$user=new User();
        $data=['name'=>'hhhh','age'=>67];
		var_dump($user->yyy($data));

	}

	
	public function ppp()
	{
		$user=new User();
		// $obj=$user::get(103);
		// $obj->name='张ABCD';
		// $obj->save()

		//$user->save(['name'=>'王五103'],['id'=>103]);

		//$obj=$user::get(45);
		//$obj->delete();
		// User::destroy('41,52');

	}



}