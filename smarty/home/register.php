<?php
require_once('config.php');
$methodType=$_SERVER['REQUEST_METHOD'];
if($methodType=='GET'){
    $smarty->display('register.tpl');
}else{
	 $data=$_POST;
	 $time=time();
	 $sql="insert into tg_user(user,pwd,create_time)values('{$data['user']}',MD5('{$data['pwd']}'),{$time})";
	 $bool=DB::getDB()->query($sql);
	   if($bool){
            $arr= ['status'=>1,'msg'=>'恭喜您注册成功']; 
            echo  json_encode($arr);
        }else{
        	$arr=['status'=>0,'msg'=>'失败']; 
        	echo  json_encode($arr);
        }

}

