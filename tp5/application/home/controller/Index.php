<?php
namespace app\home\controller;
use think\Db;
use think\Request;
use think\Controller;
class Index extends Controller
{
    public function index()
    {
        return 'jkkkkkkkkk';
    }
    public function index2()
    {  
    	
    	return 'jsdfjskdfj';
    }
    public function demo1($id='')
    {
    	 echo 99;
    	 echo $id;
    }
    public function demo2($ss='')
    {
        echo $ss;
    }

    public function demo3(Request $requset)
    {
         $all=$requset->param();//接收请求
         var_dump($_GET);//等同于$requset->param()
         echo '<hr/>';
         var_dump($all);
    }
    public function demo4()
    {
    	$obj=Request::instance(); //等同于demo3方法中的参数 Request $requset
    	$all=$obj->param();
    	var_dump($all);
    	echo '<hr/>';
    	var_dump($obj->isGet());
    	echo '<hr/>';
    	dump($obj->header());
    }
    public function demo5()
    {
    	 $all=input('param.');
    	 var_dump($all);
    }
    public function demo6()
    {
       // $arr=Db::query('select * from study1');
       //$bool=Db::execute("insert into study1 (name,age,class)values('Dddddddddd',5,'yyyyyyyy')");
       //$bool=Db::execute("update study1 set name='我的名字',age=23,class='php班级'where id=97");

       //dump($bool);
       //$arr=Db::table('study1')->where(['id'=>90])->find();
        //$arr=Db::table('study1')->where('age','>',20)->select();
        //$arr=Db::table('tg_style')->where(['class_id'=>1])->select();

        $data=['name'=>'张三','age'=>18,'relish'=>'音乐','class'=>'好好学习'];
        //$arr=Db::table('study1')->insert($data);
        $arr=Db::table('study1')->where('id', 1)->update($data);
        dump($arr);
    }

    public function demo7()
    {  
        //验证码
        return $this->fetch('demo7');
    }
    public function demo8()
    {
       //$arr=Db::table('study1')->where('id','>',10)->where('sex','男')->select(); 
        //$arr=Db::table('study1')->where('id','>',10)->where('id','<',20)->whereOr('sex','男')->select(); 

        // $arr = Db::table('study1')->where(function ($query) {
        //             $query->where('id', 1)->whereor('id', 2);
        //         })->whereOr(function ($query) {
        //             $query->where('name', 'like', 'think')->whereOr('name', 'like', 'thinkphp');
        //         })->select();

        //$arr=Db::getTableInfo('study1');

        //$arr=Db::table('study1')->field('name,age')->select();
        //$arr=Db::table('study1')->field('id,name,age')->where('id','<',10)->order('age desc,id asc')->select();
        //$arr=Db::table('study1')->field('id,name,age')->where('id','<',60)->order('id desc,age asc')->limit(4,6)->select();
        $arr=Db::table('study1')->field('sex,count(*)')->group('sex')->select();
        $sql="select sex,count(*) from study1 group by sex ";
        dump($arr);
    }


}
