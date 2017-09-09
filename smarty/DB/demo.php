<?php
//var_dump($_POST);
//echo '<hr/>';
//var_dump($_FILES);

//die;
 $arrInt=count($_FILES['Filedata']['name']);

for ($i=0; $i <$arrInt ; $i++) { 

	$name=$_FILES['Filedata']['name'][$i];
	$namefile=$_FILES['Filedata']['tmp_name'][$i];
    $arr=explode('.', $name);
    $dir="../uploade/".time().mt_rand(1,100000).'.'.$arr[1];
    //echo $dir;
    //die;
    $bool=move_uploaded_file($namefile,$dir);

}

var_dump($bool);

//$name[]=$_FILES['idcard']['name'][1];
//var_dump($name);










// $name= $_FILES['idcard']['name'];
// //echo '<hr/>';
// $namefile=$_FILES['idcard']['tmp_name'];
// //$dir="../uploade/".$name;
// $arr=explode('.', $name);
// $dir="../uploade/".time().'.'.$arr[1];
// //echo $dir;
// //die;
// $bool=move_uploaded_file($namefile,$dir);
// var_dump($bool);