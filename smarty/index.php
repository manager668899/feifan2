<?php
require_once('libs/Smarty.class.php');
require_once('DB/DB.class.php');
session_start();
$smarty =new Smarty();
 
$smarty->template_dir='web';//设置的模板目录是web 
$smarty->assign('url','');

$smarty->display('index.tpl');



