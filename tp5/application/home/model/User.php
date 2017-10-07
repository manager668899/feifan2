<?php
namespace app\home\model;
use think\Model;
use think\Db;
class User extends Model
{
	protected $table = 'study1';

	public function yyy($data='')
	{
         $bool=Db::table('study1')->insert($data);
         if($bool){
         	return true;
         }else{
         	return false;
         }

	}


}