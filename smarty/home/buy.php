<?php
require_once('config.php');
$methodType=$_SERVER['REQUEST_METHOD'];

if($methodType=='POST'){
		$goodsid=$_POST['ids'];
		$goodsmun=$_POST['num'];
		$goodsstyle=implode('.', $_POST['style']) ;
		$goodsprice=$_POST['price'];

		  if(isset($_SESSION['userid'])){
		     $userid=$_SESSION['userid'];
		    $sql="insert into tg_buy(goodsID,goodsmun,userid,goodsstyle)values({$goodsid},{$goodsmun},{$userid},'{$goodsstyle}')";
		    $bool=DB::getDB()->query($sql);
		       if($bool){
		           echo '加入成功';
		       }else{
		       	   echo '加入失败';
		       }
		  }else{
		  	 echo '请登录';
		  }
		 
}else{
    if(isset($_SESSION['userid'])){
        $sql="";
    }else{
    	echo '你还没有登录';
    }

	$smarty->display('buy.tpl');
}



