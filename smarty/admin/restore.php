<?php
require_once('config.php');
$id=$_GET['id'];

$sql="update tg_goods set status=1 where id={$id}";
$bool=DB::getDB()->query($sql);
if($bool){
	 echo '还原成功了';
}else{
	 echo '还原失败';
}
