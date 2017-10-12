<?php
namespace app\Admin\controller;
use app\Admin\controller\Auth;
use think\Db;
use think\Request;
class System  extends Auth
{
    public function aaa()
    { 

    	echo 'aaa';
    }
      public function index()
    {
       return view('index/index');
    }


    public function listAuth()
    {
    	return view();
    }
    public function addRole()
    {   
        $arr=Db::table('rbac_node')->select();
        //var_dump($arr);
    	return view('addRole',['arr'=>$arr]);
    }
    public function receive(Request $request)
    {
       $data=$request->param();
       dump($data);
      // $role_title=$data['role_title'];
      dump($data['yy']);
      dump($data['id']);
      $new=$data['yy']+$data['id'];

      dump($new);
      $str=implode(',', $new);
      echo $str;


    }
    public function userRole()
    {   
    	//$arr=Db::table('tg_user')->field('id,user,userroleid')->select();
    	$sql="select tg_user.id,user,userroleid,role_title from tg_user inner join rbac_role on tg_user.userroleid=rbac_role.id";
    	$arr=Db::query($sql);
    	//var_dump($arr);
    	//die;
    	return view('userRole',['arr'=>$arr]);
    }


}