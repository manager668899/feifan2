<?php
namespace app\Admin\controller;
use think\Db;
use think\Request;
use think\Session;
class Auth 
{
	public function limits()
	{
		return view();
	}
 /*只做了测试没有使用*/
	public function sel()
	{
        $arr=Db::table('rbac_user')->select();
        //如果需要下面这条sql语句的话数据库中的rbac_role.node.id必须是单个数字没有','号隔开方才生效
        $sql="select operation from rbac_node,rbac_role where rbac_role.id=2 and rbac_role.node_id=rbac_node.id and rbac_node.operation='update'";
        return view('sel',['arr'=>$arr]);

	}
/*权限判断方法*/
public function yanzheng($order)
	{   
		
		//1 代表的是角色的id
		$userid=Session::get('UserRoleId');

		$role=Db::table('rbac_role')->where(['id'=>$userid])->find();
		//var_dump($role);
		$array=$role['node_id'];
		$newarr=explode(',',$array);
		// var_dump($newarr);
		// echo '<hr/>';
		$count=count($newarr);
          for ($i=0; $i <$count ; $i++) { 
          	$node[]=Db::table('rbac_node')->field('operation')->where(['id'=>$newarr[$i]])->select();
            //order 是客户输入的节点
          	if($node[$i][0]['operation']==$order){
          		
          		return 1;
          	}
            
          }	

	}
/*测试没有使用*/
	public function urlget(Request $request)
	{
       // echo $request->url().'<br/>';
       // echo $request->remotePort().'<br/>';
       // echo $request->protocol().'<br/>';
       // echo $request->query().'<br/>';
       // echo $request->scheme().'<br/>';
		echo $request->path().'<br/>'; //获取路由名称
	}

	public function __construct(Request $request)
	{ 
		$order=$request->path();//获取路由名字
		echo Session::get('UserName');
		echo '角色id是'. Session::get('UserRoleId').'<br/>';
		if(!Session::get('UserName')){
           header('Location:login');
           return false;
		}

		$num=$this->yanzheng($order);
		if($num==1){
           echo '有权限';
		}else{
		   echo '没有权限';
		}
	}

}