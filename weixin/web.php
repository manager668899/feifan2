<?php
$signature=$_GET['signature'];
$timestamp=$_GET['timestamp'];
$nonce=$_GET['nonce'];
$echostr=$_GET['echostr'];
$token='zhang123';
$arr=array($token,$timestamp,$nonce);
sort($arr);
$str=implode($arr);
$newstr=sha1($str);
if($newstr==$signature){
   echo $echostr;
}
