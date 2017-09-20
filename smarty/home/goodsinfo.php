<?php
require_once('config.php');
$id=$_GET['id'];
$sql="select * from tg_goods where id= {$id}";
//$sql2="select tg_goods.id,tg_goods.name ,tg_style.stylename from tg_goods right join tg_style on tg_goods.id=tg_style.class_id where tg_goods.id=1";
$sql2="select * from tg_style where class_id ={$id}";

$goods=DB::getDB()->login($sql);
$style =DB::getDB()->select($sql2);
$smarty->assign('goods',$goods);
$smarty->assign('style',$style);
$smarty->display('goodsinfo.tpl');