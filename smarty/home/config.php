<?php
require_once('../libs/Smarty.class.php');
require_once('../DB/DB.class.php');

$smarty =new Smarty();

$smarty->template_dir='../web'; //设置模板目录为  上一级的web文件夹
$smarty->assign('url','../');