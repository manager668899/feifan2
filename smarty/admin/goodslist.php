<?php
require_once('config.php');

//$limitNum=0;
//$methodType=$_SERVER['REQUEST_METHOD'];

if(isset($_GET['num'])){
	echo 'ddd';

}
 //$sql="select * from tg_goods";


$limitNum=20;

//echo  $limitNum;

  $sql="select tg_goods.id,tg_goods.name,tg_goods.price,tg_goods.mun,tg_goods.pic,tg_goods.times,tg_class.title from tg_goods inner join tg_class on tg_goods.classid = tg_class.id order by tg_goods.id asc limit {$limitNum}";
  echo $sql;
  $arr=DB::getDB()->select($sql);
  // echo '<pre>';
  // print_r($arr);
  // die;
  $smarty->assign('arr',$arr);
$smarty->display('goodslist.tpl');
