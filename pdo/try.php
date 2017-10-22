<?php
$servername = "localhost";
$username = "username";
$password = "password";

try {

    $conn = new PDO("mysql:host=$servername;dbname=myDB", $username, $password);
    // 设置 PDO 错误模式为异常
    // $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // $sql = "CREATE DATABASE myDBPDO";
    // // 使用 exec() ，因为没有结果返回
    // $conn->exec($sql);
    // echo "Database created successfully<br>";
 }catch(Exception $e){
       echo $sql . "<br>" . $e->getMessage();
    }

// $conn = null;
//$conn = new PDO("mysql:host=$servername;dbname=myDB", $username, $password);
echo '<hr/>';
echo 'uuu';
