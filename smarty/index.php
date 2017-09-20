<?php
require_once('libs/Smarty.class.php');
require_once('DB/DB.class.php');
session_start();
$smarty =new Smarty();

$sql="select * from tg_goods where status=1";
$arrgoods=DB::getDB()->select($sql);
$smarty->template_dir='web';//设置的模板目录是web 
$smarty->assign('url','');
$smarty->assign('arrgoods',$arrgoods);

$smarty->display('index.tpl');



