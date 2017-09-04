<?php
class DB
{    
   public static $null=null;
   public $link;

	 public function __construct()
	 {
           $res=mysqli_connect('localhost','root','root','feifan');
           //var_dump($res);
           mysqli_query($res,'set names utf8');
           $this->link=$res;

	 }



	 public static function getDB()
	 {
         if(self::$null==null){
              self::$null=new self();
              return self::$null;
         }else{
              return self::$null;
            
         }
       
	 } 

   public function select()
   {
           $sql="select * from study1";
           $resa=mysqli_query($this->link,$sql);
           $array=[];
           while ( $arr=mysqli_fetch_assoc($resa)) {
                     $array[]=$arr;
           }
           //var_dump($array);
           return $this;

   }


   public function ggg()
   {
       echo 'ggggg';
       return $this;

   }

   public function kkk(){
       echo 'Kkkkkkkk';
   }


}

DB::getDB()->select()->ggg()->kkk();
/*
 smarty 模板的配置 渲染输出 模板中的函数 包含 继承 流程控制 
 面向对象的单列模式  
 
*/
