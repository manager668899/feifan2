<?php


// $a=['aa'=>'aaa','bbb'=>'bbbbb'];

// var_dump(json_encode($a)); // 变量转化成json格式

$b='{"aa":"aaa","bbb":"bbbbb"}';


$s=json_decode($b,true); //json转化为php变量


var_dump($s);