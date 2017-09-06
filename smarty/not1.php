<?php
require_once('libs/Smarty.class.php');
//include(); 包含 警告  include_once 包含一次 
//require(); 包含 致命  require_once 包含一次
$smarty =new Smarty();
//echo '<pre>';
//var_dump($obj);
$smarty->template_dir='web/not'; //设置一个web文件夹为模板目录
$smarty->display('not1.tpl');