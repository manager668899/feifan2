<?php
namespace app\Admin\controller;
use app\Admin\controller\Auth;
class User extends Auth
{
	public function vip()
	{
		return view();
	}
	public function vip2()
	{  
		//echo 888;
		return view();
	}
	public function yyy()
	{
	   var_dump($_POST);
	}
}