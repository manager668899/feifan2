<?php
namespace app\Admin\controller;
use think\Db;
class Auth 
{
	public function limits()
	{
		return view();
	}

	public function sel()
	{
        $arr=Db::table('rbac_user')->select();
        return view('sel',['arr'=>$arr]);

	}
	public function role($order='order')
	{
		//1 代表的是角色的id
		$role=Db::table('rbac_role')->where(['id'=>1])->find();
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

}