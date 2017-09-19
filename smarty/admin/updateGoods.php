<?php
require_once('config.php');
$methodType=$_SERVER['REQUEST_METHOD'];
if($methodType=='GET'){
	  $id=$_GET['id'];

  $sql="select * from tg_goods where id={$id}";
  $sql2="select *from tg_class";
  $sql3="select * from tg_style where class_id= {$id}";
  $arr=DB::getDB()->SelectGo($sql2);
  $goods=DB::getDB()->login($sql);
  $style=DB::getDB()->select($sql3);

 // var_dump($arr);
  //echo '<hr/>';
  //var_dump($style);
  //die;
  $smarty->assign('style',$style);
  $smarty->assign('goods',$goods);
  $smarty->assign('arr',$arr);
  $smarty->display('updateGoods.tpl');

}else{
	$id=$_POST['id'];
	 
	       if($_FILES['idcard']['name'][0]!=''){
                
                   $arrInt=count($_FILES['idcard']['name']);
				   for ($i=0; $i <$arrInt ; $i++) { 

					$name=$_FILES['idcard']['name'][$i];
					$namefile=$_FILES['idcard']['tmp_name'][$i];
				    $arr=explode('.', $name);
				    $imgname[$i]=time().mt_rand(1,100000).'.'.$arr[1];

				     $bool=move_uploaded_file($namefile,"../uploade/".$imgname[$i]);

				     $sql3="update tg_goods set pic='{$imgname[0]}' where id = {$id}";
                     DB::getDB()->query($sql3);
				       }
				   }


	$name=$_POST['user'];
	$price=$_POST['price'];
	$mun=$_POST['mun'];
	$address=implode('.', $_POST['address']) ;
	
	$class_id=$_POST['class'];
	if(isset($_POST['style'])){
       $style=$_POST['style'];

       foreach ($style as $key => $value) {
           $sql="insert into tg_style (stylename,class_id)values('{$value}',{$id})";
           DB::getDB()->query($sql);
       }

       
	}
	  

     if(!empty($_POST['styleup'])){
            	$styleup=$_POST['styleup'];//获取到修改后值
	            $typeid=$_POST['typeid'] ;//获取相应的id号
	            $count=count($styleup);//得到数组的个数
              for ($i=0; $i <$count ; $i++) { 
                   $sql4="update tg_style set stylename='{$styleup[$i]}' where id={$typeid[$i]}"; 
                   DB::getDB()->query($sql4);

               } 


         //die;
     }

	$content=$_POST['content'];
	$time=time();

	$sql2="update tg_goods set name='{$name}',price={$price},mun={$mun},address='{$address}',classid={$class_id},content='{$content}',uptimes={$time} where id={$id}";

	  $bool=DB::getDB()->query($sql2);
	  if($bool){

              echo "<script type='text/javascript'>
                       alert('修改成功');
                       window.location.assign('goodslist.php');

                    </script>";
	  }
	 



	  
}
