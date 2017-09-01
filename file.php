<?php
$res=is_dir('ajax');//true
var_dump($res);
echo '<hr>';
$file=is_file('file.html');//true
var_dump($file);
$num=filesize('file.html');//int
echo '<hr>';
var_dump($num);//true
echo '<hr>';
var_dump(file_exists('ajax')) ;//true
echo '<hr>';
$a="D:/phpStudy/WWW/fiefan2/file.html";
var_dump(basename($a)) ;//file.html
echo '<hr>';
var_dump(dirname($a));//D:/phpStudy/WWW/fiefan2
echo '<hr>';
var_dump(pathinfo($a));
/*
array(4) {
  ["dirname"]=>
  string(23) "D:/phpStudy/WWW/fiefan2"
  ["basename"]=>
  string(9) "file.html"
  ["extension"]=>
  string(4) "html"
  ["filename"]=>
  string(4) "file"
}
*/
echo '<hr/>';
//var_dump(opendir('ajax'));
$resnew=opendir('ajax');
//var_dump(readdir($resnew));
//rewinddir($resnew);
while ($file=readdir($resnew)) {
	 echo $file.'<br/>';
	    // if(is_dir($file)){
             
	    // }

}
//var_dump(closedir($resnew)) ;

closedir($resnew);
