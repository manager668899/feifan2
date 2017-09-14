<?php
require_once('config.php');
$page=1;
if(isset($_GET['page'])){
    $page=$_GET['page'];//第几页
       if($page<1){
            $page=1;
       }
}

        //总条数
$sql2="select COUNT(*) as id from study1";
$count=DB::getDB()->login($sql2);
echo '总条数';
echo $count['id'];    //总条数


echo '<hr/>';
echo '总页数';
$showPage=5;
echo $n=ceil($count['id']/$showPage) ;  //总页数

if(isset($_GET['page'])){
    $page=$_GET['page'];//第几页
       if($page<1){
            $page=1;
       }
       if($page>$n){
       	    $page=$n;
       }
}

$s=($page-1)*$showPage;
echo '<hr/>';
echo $page;
$sql="select * from study1 limit {$s},{$showPage}"; //5/
echo $sql;
//偏移量
$pageoffset=($page-1)/2;
$show=5;
$start=1;
$end=$n;
$study1=DB::getDB()->select($sql);
$smarty->assign('arr',$study1);
$smarty->assign('page',$page);
$smarty->assign('n',$n);
$smarty->display('user.tpl');