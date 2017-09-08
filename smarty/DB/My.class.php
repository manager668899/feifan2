<?php
class My{
   public  $ss='ssssss';

   public function aa()
   {
   	  echo "stringjjjjj";
   }
   protected function cc()
   {
   	   echo '受保护的方法';
   }

   private function dd()
   {
   	   echo '私有的方法';
   }


   public function __construct()
   {
   	   echo '构造1';
   }
   public function ff1()
    {
    	 $this->dd();
    }
  
   public static function gg2()
    {    
    	 echo '<hr/>';
    	 echo '类名是'.__CLASS__; 
    }

    //第一个My类中使用了static:: 这个关键字，他可以判断出是那个父类所调用
    //要求是能理解
    public static function gg3()
    {
         static::gg2();//起到一个判断作用
    }

}
/*------------------------------------------*/
class My2 extends My{

	 public static $jjj='jjjjjjjjj';
	 public function bb()
	 {
	 	 echo 'bbbbbbbbb';
	 }


    public function __construct()
    {
   	   echo '构造2';
   	   parent::__construct();//用来执行父类的构造方法
    }
    public function ee()
    {
    	 $this->cc();
    }
    public function ff()
    {
    	 //$this->dd();
    }
    public static function Gg()
    {
    	 echo 'gggg';
    	 self::gg1();
    	 self::gg2();
    }
    public static function gg1()
    {
    	 echo 'gg1';
    	 $sss= new self();//类的本身
    }


    public static function gg2()
    {
         echo '<hr/>';
    	 echo '类名是'.__CLASS__; 
    }


}
/*_________________________*/
class My3 extends My2
{
    public function __construct()
    {
       echo 'My3类';
       parent::__construct();
    }
}

$obj=new My3();
$obj->aa();
//$obj=new My2();
//echo $obj->ss; 

//$obj->cc(); //外部不能访问收保护的方法
//$obj->ee(); //在类的内部或者继承的子类可以调用
//私有的只能在本类内部调用访问

//$obj->ff();


//$obj2=new My();
//$obj2->ff1();

//My2::Gg();
//echo My2::$jjj;
// static 静态 和动态的区别 静态的值是存储在内存中程序结束不会立刻消失。

// My2::gg3();
// My::gg3();


// function kkk()
// {
//   static $a=1;
// 	$a++;
// 	echo $a;
// }


// echo '<hr/>';
// kkk();
// kkk();
// kkk();
// kkk();