<?php
require_once('config.php');

$methodType=$_SERVER['REQUEST_METHOD'];
if($methodType=='GET'){

	  $sql="select id,title,pid from tg_class";

	  $arr=DB::getDB()->SelectGo($sql);
      $smarty->assign('arr',$arr);
	  $smarty->display('addclass.tpl');
}else{
	 $data=$_POST;
	 $sqls="insert into tg_class(title,pid)values('{$data['names']}',{$data['ids']})";
	 
	 $bool=DB::getDB()->query($sqls);
	 $inserID=DB::getDB()->getinsertId();
	 //mysqli_insert_id();
	 //var_dump($bool);
	 if($bool){
	 	 $arr= ['status'=>1,'msg'=>'添加成功','asss'=>$data['names'],'inserID'=>$inserID]; 
	 }else{
	 	 $arr= ['status'=>0,'msg'=>'添加失败']; 
	 }
     echo json_encode($arr);

}
