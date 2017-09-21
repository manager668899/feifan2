<?php
require_once('config.php');
$methodType=$_SERVER['REQUEST_METHOD'];

if($methodType=='POST'){
		$goodsid=$_POST['ids'];
		$goodsmun=$_POST['num'];
		if(isset($_POST['style'])){
			$goodsstyle=implode('.', $_POST['style']) ;
		}else{
			echo "请选择属性";
			return false;
		}
		
		$goodsprice=$_POST['price'];

		  if(isset($_SESSION['userid'])){
		     $userid=$_SESSION['userid'];
		    $sql="insert into tg_buy(goodsID,goodsmun,userid,goodsstyle)values({$goodsid},{$goodsmun},{$userid},'{$goodsstyle}')";
		    $bool=DB::getDB()->query($sql);
		       if($bool){
		           echo "<script>
		                 alert('加入成功');
		                 window.history.back();
		              </script>";
		       }else{
		       	   echo '加入失败';
		       }
		  }else{
		  	 echo '请登录';
		  }
		 
}else{
    if(isset($_SESSION['userid'])){
    	 $userid=$_SESSION['userid'];
         $sql="select tg_buy.id,tg_buy.goodsID,tg_buy.goodsmun,tg_buy.userid,tg_buy.goodsstyle,tg_goods.name,tg_goods.price,tg_goods.pic  from tg_buy inner join tg_goods on tg_buy.goodsID=tg_goods.id  where userid={$userid}";
         $buyArr=DB::getDB()->select($sql);
         $smarty->assign('buyArr',$buyArr);

    }else{
    	echo '你还没有登录';
    	return false;
    }

	$smarty->display('buy.tpl');
}



