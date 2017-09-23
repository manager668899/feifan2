<?php
/*删除数据库中没有记录的图片*/

//$arr2从数据库中查询出来的数据 是一个二维数组
$arr2=[
	  ['aaa','bbb','ccc','ddd','IMG_3325.JPG'],
	  ['aaa1','bbb1','ccc1','ddd1','fff1']
    ];


$count=count($arr2);
//echo $count;


$filename=scandir('dir');//查询出dir文件夹下所有的文件件名 也就是图片名 返回值是一个索引数组,下标对应的值是图片名称   

$num=count(scandir('dir'));
//echo $num;

for ($i=0; $i <$count ; $i++) {

	   for ($j=2; $j<$num ; $j++) { 
	   	     //in_array(needle, haystack)

	   	      //echo $filename[$j].'$i是'.$i .'<hr/>';
	   	      if(!in_array($filename[$j],$arr2[$i])){
	   	      	  echo '我要删除'.$filename[$j]; 
	   	      	  echo '<hr/>';

	   	      }else{
	   	      	  echo '这张图片存在数据库中不能删除'.$filename[$j] ;
	   	      	  echo '<hr/>';
	   	      	    static $imgArray=array();
	   	      	     $imgArray[]=$filename[$j];
	   	      }

	   }

}


var_dump($imgArray);

for ($s=2; $s <$num ; $s++) { 
		if(!in_array($filename[$s], $imgArray)){
             unlink('dir/'.$filename[$s]);
	}
}

