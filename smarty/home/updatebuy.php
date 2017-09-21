<?php
require_once('config.php');
$methodType=$_SERVER['REQUEST_METHOD'];
$id=$_POST['ids'];
$price=$_POST['prices'];
$value=intval($_POST['values']);
$sql="update tg_buy set goodsmun ={$value} where id={$id}";
$bool=DB::getDB()->query($sql);
if($bool){
	$count=$value*$price;
	echo json_encode($count);
}