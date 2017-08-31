<?php
/*
数据类型
  布尔类型  boolean  true false
  整形      integer    1 2 23 45 88888
  浮点型    float    带小数点的 1.34
  字符串    string    afsdf   你好 sfj89  


  数组   array     
  对象   object
  资源   resource
  null   空 


  检查一个数据类型用函数var_dump();
var_dump('true');
*/

//字母或者下划线开头，后面跟上任意数量的字母，数字，或者下划线
//$assdf1='sdfsdf';


//var_dump($assdf1);
//常量
// define('DDD','kskfalkfdj');
// define('ABCD', 'abcd');
// echo DDD;
// echo '<hr/>';
// echo ABCD;
// echo '<pre>';
// echo "kjjjjjjj\njjjjjjj";
// echo '<hr/>';
// echo '\'';
// echo '<hr/>';
// echo "\"";
// echo '<hr/>';
// echo  '\'';
// echo '<hr/>';
// echo "\$";
// echo '<hr/>';
// echo '\\';
// echo '<hr/>';
// echo 'dsfddddddddddddddd'."\r".'dddddd';
// echo '<hr/>';
// echo "\t";

// echo('pppppp');
// echo 'ddddddfffffffffff';
// print 'kkkkkkkkkkkkk';
//$a=8; //表达式

// $x='abc';
// $y=7;

// echo $x+$y;
// echo '<hr/>';
// echo $x+$y-$x;
// echo '<hr/>';
// echo $x*$y;
// echo '<hr/>';
// echo $x/$y;
// echo '<hr/>';
// echo $x%$y;
// echo '<hr/>';
// echo 2%3;

//echo ($x+$y)*$x;
//echo $x*($y+$x)*$y;

// $x=+$y;
// echo $x;

//$x+=$y;
//$x-=$y;
//$x*=$y;
// $z='f';
// $x.=$y;
// $z.=$x;
// echo $x+$y;
// echo $x-$y;
// echo $x*$y;

// echo '<hr/>';
// echo $x;
// echo '<hr/>';

// $x=5;

// //++$x;
// // $z=$x++;  //5
// // //$z=++$x;    //6
// // echo $z;

// $y=10;
// //$z=$y--;
// $z=--$y;
// echo $z;

// $x='a';
// $y='c';
// $a=1;
// $b='1';
// $m=9;
// $n=8;
// var_dump($x==$y);
// var_dump($a==$b);
// var_dump($a===$b);
// var_dump($m>$n);
// var_dump($m<$n);
// var_dump($x!=$y);
// var_dump($a!==$b);

// $n=true;
// $m=false;

// if(!$m){

// 	echo 'true';
// }else{
// 	echo 'false';
// }
//$h=@mysqli_connect('localhost','rootd','root');
// $x='6a';
// $y=1;
// echo $x+$y;
// $a=['aaaa'=>'aaaa'];
// $b=['dddd'=>'dddddddddd'];
// $c=$a+$b;
// var_dump($c);
// $c='pppp';
// $a='jj{$c}jjjj$c'.$c;

// $b="kkk{$c}kkkkk$c".$c;
// echo '<hr/>';
// echo "http://www.dodoca.com/xiaochengxu?".$c."promotiondata={$b}&pkeywordid=$c";
// echo '<hr/>';
// echo $a;
// echo '<hr/>';
// echo $b;
// $n=7;
// $m=8;
// echo '<hr/>';
// echo "{ $n * $m }";
$a=10;
$b=10;

// while ( $a <= 20) {
// 	 if($a==18){
//          //break;
// 	 }
// 	 echo $a.'<br/>';
// 	 $a++;

// }
// do{
//    echo $b.'<br/>';
//    $b++;
// }while ( $b<= 20);
// for ($i=1; $i <10 ; $i++) { 
      
// 	    for ($j=1; $j <= $i; $j++) { 
// 	    	  echo $i.'*'.$j .'='.$j*$i.'&nbsp&nbsp&nbsp&nbsp'; 
// 	    }
//     echo '<br/>';
// }

// for ($a=0; $a<=100 ; $a++) { 
// 	     $b=1;
// 		 while ( $b<= 10) {
// 		  	  echo $a.'------'.$b.'<br/>';
// 			  	       if($a==$b){
// 	                         echo $a.'->>>>>-'.$b.'<br/>'; 

// 			  	       }
// 		  	  $b++;
// 		  } 

// }

for ($i=0; $i <5 ; $i++) { 
	    for ($j=0; $j <5 ; $j++) { 
	    	  for ($n=0; $n <5 ; $n++) { 
	    	  	   for ($m=0; $m <5 ; $m++) { 
	    	  	         echo $i.'---'.$j.'----'.$n.'----'.$m.'<hr/>';
	    	  	   }
	    	  }
	    }
}