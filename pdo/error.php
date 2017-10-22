<?php
 function customError($errno, $errstr)
 {
   echo "<b>错误信息:</b> [$errno] $errstr <br>";
   echo "出错了";
   die();
 } 

set_error_handler("customError"); 

//require('sdkf.php');
//echo $yy;


try{
   echo $yy;
}catch(Exception $e){
   echo 'Message: ' .$e->getMessage();
}

echo 'jsj';