<?php
echo time();
echo '<hr/>';
session_start();
$_SESSION['name']='zhansi';
setcookie('jjjjj','zhangsan',time()+1200);
// setcookie('name1','lisijjjjj',time()+100);
// setcookie('name2','name2222');