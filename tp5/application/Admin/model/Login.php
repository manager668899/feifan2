<?php
namespace app\Admin\model;
use think\Model;
use think\Db;
class Login extends Model
{
	 public function yy($arr='')
	 {
	 	$user=$arr['user'];
	 	$pwd=$arr['pwd'];
	 	//从数据库查询出用户输入的数据
	 	$array=Db::table('tg_user')->where(['user'=>$user])->find();
        //将查询出来的数据做比较 先判断用户名是否存在（如果存在判断密码）否则返回假
	 	if($array){
	 		if($array['pwd']==md5($pwd)){
                return true;
	 		}else{
	 			return false;
	 		}
	 	}else{
	 		return false;
	 	}

	 }

} 