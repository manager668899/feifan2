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
// echo '总条数';
// echo $count['id'];    //总条数


// echo '<hr/>';
// echo '总页数';
$showlist=5;//页码每页显示几条数据
 $n=ceil($count['id']/$showlist) ;  //总页数

if(isset($_GET['page'])){
    $page=$_GET['page'];//第几页
       if($page<1){
            $page=1;
       }
       if($page>$n){
       	    $page=$n;
       }
}

$s=($page-1)*$showlist;
// echo '<hr/>';
$showpage=5; //显示的页面是5个格子
// 计算出偏移量
$pageoffset=($showpage-1)/2;

$sql="select * from study1 limit {$s},{$showlist}"; //5/
// echo $sql;

$start=1;
$end=$n;



$study1=DB::getDB()->select($sql);
$smarty->assign('arr',$study1);
$smarty->assign('page',$page);
$smarty->assign('start',$start);
$smarty->assign('n',$n);
$smarty->assign('end',$end);
$smarty->assign('showpage',$showpage);
$smarty->assign('pageoffset',$pageoffset);
$smarty->assign('showlist',$showlist);
$smarty->display('user.tpl');
