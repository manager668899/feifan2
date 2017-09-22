<?php
//unlink('1.jpg'); //删除文件
// $fileddd=filetype('1.png');//返回file 字符串为普通文件

// var_dump($fileddd);
// if($fileddd){
//   echo 'zhen';
// }

//var_dump(file_exists('dire')) ;
//var_dump(filesize('1.png'));//返回文件的大小字节
//var_dump(filectime('dir'));
//var_dump(stat('dir')) ;

file_put_contents(filename, data);

file_get_contents(filename);

opendir(path);//打开一个文件
fwrite(handle, string); //写入文件
fclose(handle); //关闭资源