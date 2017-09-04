<?php
require_once('libs/Smarty.class.php');
//include(); 包含 警告  include_once 包含一次 
//require(); 包含 致命  require_once 包含一次
$smarty =new Smarty();
//echo '<pre>';
//var_dump($obj);
$smarty->template_dir='web'; //设置一个web文件夹为模板目录
$a='你好中国达到的';
$smarty->assign('a',$a);//两个参数第一个参数是变量名  第二是变量的值
$b='欢迎光临php';
$smarty->assign('b',$b);

//$arr=array();
$arr=['aa'=>'AAAA','bb'=>'BBB','cc'=>'CCC'];
$smarty->assign('arr',$arr);
class My{
	public $s='TTTTTTTTTTT';
	public function hh()
	{
		echo 'HHHHHHH';
	}
}
$obj=new My();
$smarty->assign('obj',$obj);
//echo md5(123456);
//die;
//$smarty->display('index.html'); //渲染输出选择的模板是index.html


$smarty->assign('content','商品');
$smarty->display('index.tpl');



