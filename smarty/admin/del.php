<?php
require_once('config.php');
$id=$_GET['id'];

$sql="update tg_goods set status=0 where id={$id}";
$bool=DB::getDB()->query($sql);
if($bool){
	 echo '成功了';
}else{
	 echo '删除失败';
}
