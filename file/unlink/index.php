<?php
header("Content-Type:text/html;charset=utf-8");
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

// file_put_contents(filename, data);

// file_get_contents(filename);

// opendir(path);//打开一个文件
// fwrite(handle, string); //写入文件
// fclose(handle); //关闭资源


//var_dump(is_dir($dirname)) ;

//var_dump(is_dir('dir/sss'));

//echo  DIRECTORY_SEPARATOR;
echo '测试遍历文件';

$arr=['aaaa','bbbbb','cccccccccccc','dddddd'];
$arr2=[
	  'aaa'=>['aaa','bbb','ccc','ddd','1A0C6BB378C41AFDEBC00F79AC2_E941074F_3C54F.jpg'],
	  'aaa1'=>['aaa1','bbb1','ccc1','ddd1','fff1']
    ];



function bianli($dirname){
	      if(is_dir($dirname)){
	      	$conn=opendir($dirname);
	      }else{
	      	  die('不是文件夹');
	      }
	while ($file=readdir($conn)) {
          $sub_dir = $dirname . DIRECTORY_SEPARATOR . $file; 

		  if($file=='.'||$file=='..'){
	            continue;
		  }
          if(is_dir($sub_dir)){
             bianli($sub_dir);
          }

		  if(!is_dir($sub_dir)){
		  	 echo $sub_dir.'<br/>';
		  	 // unlink($sub_dir);

		  }
	}

}

bianli('dir');







// var_dump($arr2);

// $bool=in_array('aaaa', $arr);
// var_dump($bool);

// $bool2=in_array('fff',$arr2['aaa']);
// var_dump($bool2);