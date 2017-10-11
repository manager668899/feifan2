<?php
namespace app\Admin\controller;
use app\Admin\controller\Auth;

class System  extends Auth
{
    public function aaa()
    { 

    	echo 'aaa';
    }
    public function listAuth()
    {
    	return view();
    }


}