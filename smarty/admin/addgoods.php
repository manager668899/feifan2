<?php
require_once('config.php');

$methodType=$_SERVER['REQUEST_METHOD'];
if($methodType=='GET'){
	 $smarty->display('addgoods.tpl');
}else{
	echo '<pre>';
	var_dump($_POST);
}

