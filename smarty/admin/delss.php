<?php
require_once('config.php');

$id=$_POST['id'];
$sql="delete from tg_style where id={$id}";
$bool=DB::getDB()->query($sql);
if($bool){
	$arr=['status'=>1,'msg'=>'删除成功'];
}else{
	$arr=['status'=>0,'msg'=>'删除失败'];
}

echo json_encode($arr);