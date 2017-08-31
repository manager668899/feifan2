<?php
//setcookie('jjjjj','',time()-1);
session_start();
unset($_SESSION['name']) ;
session_destroy();
echo '<pre>';
var_dump($_COOKIE);
