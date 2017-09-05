<?php

//var_dump($_FILES);
//die;
$name= $_FILES['Filedata']['name'];
//echo '<hr/>';
$namefile=$_FILES['Filedata']['tmp_name'];
//$dir="../uploade/".$name;
$arr=explode('.', $name);
$dir="../uploade/".time().'.'.$arr[1];
//echo $dir;
//die;
$bool=move_uploaded_file($namefile,$dir);
//var_dump($bool);
//echo $dir;

$array=['img'=>$dir];
echo json_encode($array);