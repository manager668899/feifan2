<?php
require_once('config.php');

//$limitNum=0;
$limitNum=20;
$order='tg_goods.id';
$sort='asc';

		 //$sql="select * from tg_goods";
		// $methodType=$_SERVER['REQUEST_METHOD'];
		// if($methodType=='POST'){
		// 	 $numss=1;
		// 	 $numss+= $_POST['num'];
		// 	 echo json_encode($numss);
		// 	 return false;
		// }
if(isset($_GET['Atime'])){
	//$limitNum=$_GET['num'];
	$order='tg_goods.times'; 
	$sort='desc';
}
if(isset($_GET['search'])){
      
       $link=$_GET['search'];

  $sql="select tg_goods.id,tg_goods.name,tg_goods.price,tg_goods.mun,tg_goods.pic,tg_goods.times,tg_goods.status,tg_class.title from tg_goods inner join tg_class on tg_goods.classid = tg_class.id where tg_goods.status=1 and tg_goods.name like '%{$link}%'";
 

   $arr=DB::getDB()->select($sql);
   $smarty->assign('arr',$arr);
   $smarty->display('goodslist.tpl');

return false;

}



//echo  $limitNum;

  $sql="select tg_goods.id,tg_goods.name,tg_goods.price,tg_goods.mun,tg_goods.pic,tg_goods.times,tg_goods.status,tg_class.title from tg_goods inner join tg_class on tg_goods.classid = tg_class.id where tg_goods.status=1 order by {$order} {$sort} limit {$limitNum}";
  //echo $sql;
  $arr=DB::getDB()->select($sql);
  // echo '<pre>';
  // print_r($arr);
  // die;
  $smarty->assign('arr',$arr);
$smarty->display('goodslist.tpl');
