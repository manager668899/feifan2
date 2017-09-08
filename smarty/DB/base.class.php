<?php
require_once('DB.class.php');
class Base extends DB
{
  public  function __construct(){
       echo '你没有权限登录';
   }

}

 function customError($errno, $errstr)
 {
   //echo "<b>Error:</b> [$errno] $errstr<br>";
   echo "Ending Script";
   //die();
 } 
set_error_handler("customError");

try{
	 fopen('dd.text', 'r');
	 throw new Exception("Error Processing Request");
	 
}catch(Exception $e)
 {
    echo 'Message: ' .$e->getMessage();
 }
//fopen('dd.text', 'r');

echo '<hr/>';
echo '程序没有崩溃';