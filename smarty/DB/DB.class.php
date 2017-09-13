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
   public function login($sql='')
   {
       $resa=mysqli_query($this->link,$sql);
       $arr=mysqli_fetch_assoc($resa);
       return $arr;

   }
   public function getinsertId(){
      return mysqli_insert_id($this->link);
   }

 /*用于递归新增字段查询 如无限分类*/
   public function SelectGo($sql='')
   {
           
           $resa=mysqli_query($this->link,$sql);
           $array=[];
           while ( $arr=mysqli_fetch_assoc($resa)) {
                     $array[]=$arr;
           }
  
           //return $array;
         return  $this->tree($array);//分配一个二维数组

   }
   public function tree($array,$id=0,$pid=0)
   {   
       static $newArr=array();
          foreach ($array as $key => $value) {
                  if($value['pid']==$id){
                       $value['num']=$pid;
                       $newArr[]=$value;               
                      $this->tree($array,$value['id'],$pid+1); 
                      
                  }
             
          }
          return $newArr;
   }

   public function select($sql='')
   {
           
           $resa=mysqli_query($this->link,$sql);
           $array=[];
           while ( $arr=mysqli_fetch_assoc($resa)) {
                     $array[]=$arr;
           }
           return $array;
           //return $this;

   }
   public function query($sql='')
   { 
        return mysqli_query($this->link,$sql);
       
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

//DB::getDB()->select()->ggg()->kkk();
/*
 smarty 模板的配置 渲染输出 模板中的函数 包含 继承 流程控制 
 面向对象的单列模式  
 
*/
