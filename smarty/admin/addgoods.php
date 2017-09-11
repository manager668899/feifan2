<?php
require_once('config.php');

$methodType=$_SERVER['REQUEST_METHOD'];
if($methodType=='GET'){
	  	  $sql="select id,title,pid from tg_class";

	       $arr=DB::getDB()->SelectGo($sql);

      //var_dump($arr);
	  //die;
          $smarty->assign('arr',$arr);
	 $smarty->display('addgoods.tpl');
}else{
	echo '<pre>';
	var_dump($_POST);
}

