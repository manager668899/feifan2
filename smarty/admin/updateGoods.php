<?php
require_once('config.php');
  $id=$_GET['id'];

  $sql="select * from tg_goods where id={$id}";
  $sql2="select *from tg_class";
  $arr=DB::getDB()->SelectGo($sql2);
  $goods=DB::getDB()->login($sql);
  
  $smarty->assign('goods',$goods);
  $smarty->assign('arr',$arr);
$smarty->display('updateGoods.tpl');