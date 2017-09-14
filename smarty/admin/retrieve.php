<?php
require_once('config.php');

//$limitNum=0;
$limitNum=20;
$order='tg_goods.id';
$sort='asc';





//echo  $limitNum;

  $sql="select tg_goods.id,tg_goods.name,tg_goods.price,tg_goods.mun,tg_goods.pic,tg_goods.times,tg_goods.status,tg_class.title from tg_goods inner join tg_class on tg_goods.classid = tg_class.id where tg_goods.status=0 order by {$order} {$sort} limit {$limitNum}";
  //echo $sql;
  $arr=DB::getDB()->select($sql);
  // echo '<pre>';
  // print_r($arr);
  // die;
  $smarty->assign('arr',$arr);
$smarty->display('retrieve.tpl');
