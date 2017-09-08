<?php
require_once('config.php');
$methodType=$_SERVER['REQUEST_METHOD'];
if($methodType=='GET'){
   $smarty->display('login.tpl');
}else{
   	 $data['user']=trim(strip_tags($_POST['user']));
     $data['pwd'] =trim(strip_tags($_POST['pwd']));
	 $sql="select id,user,pwd from tg_user where user='{$data['user']}'";
	 $arr=DB::getDB()->login($sql);
     
     if($arr){
             if($arr['pwd']==md5($data['pwd'])){
                $_SESSION['userid']=$arr['id'];
                $_SESSION['user']=$arr['user'];
               $arr= ['status'=>1,'msg'=>'登录成功']; 
               echo  json_encode($arr);
                   
             }else{
             	 $arr=['status'=>0,'msg'=>'密码错误']; 
                 echo  json_encode($arr);
             }
     }else{
     	   $arr=['status'=>0,'msg'=>'用户名不存在']; 
    	   echo  json_encode($arr);
     }
     
	// if($bool){
    //         $arr= ['status'=>1,'msg'=>'恭喜您注册成功']; 
    //         echo  json_encode($arr);
    //     }else{
    //     	$arr=['status'=>0,'msg'=>'失败']; 
    //     	echo  json_encode($arr);
    //     }
}
