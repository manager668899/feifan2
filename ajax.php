<?php
//echo 'jjjj';
//$_POST;
$a=30;

if($a>40){
	$array=['msg'=>'你登录失败','status'=>0];
}else{
	$array=['msg'=>'你登录成功','status'=>1];
}


echo json_encode($array);