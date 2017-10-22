<?php
$dbms='mysql';     //数据库类型 
$host='localhost'; //数据库主机名 
$port='3306';      //数据库端口
$dbName='feifan';    //使用的数据库 
$user='root';      //数据库连接用户名 
$pass='root';          //对应的密码 
$dsn="$dbms:host=$host;port=$port;dbname=$dbName";   
    
$dbh = new PDO($dsn, $user, $pass); //初始化一个PDO对象     
//var_dump($dbh);
// $sql="select * from study1";
// $bo=$dbh->query($sql);

    foreach ($dbh->query('SELECT * from study1') as $row) {
        var_dump($row); //你可以用 echo($GLOBAL); 来看到这些值
    }



