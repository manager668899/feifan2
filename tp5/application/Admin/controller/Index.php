<?php
namespace app\Admin\controller;
use think\Request;
use think\Validate;

class Index
{
    public function index()
    {
       echo 99;
    }
    public function login(Request $request)
    {  
        if($request->isPost())
        {
        	$data=$request->param();
        	//dump($data);
            // if(!captcha_check($data['yanzheng'])){
            //        echo 0;
            //     }else{
            //         echo 1;
            //     };

            $validate=new Validate([
                'user'=>'require|max:20',
                'pwd'=>'require',
                'captcha|验证码'=>'require|captcha'
            ]);
            if(!$validate->batch()->check($data))
             {   
                 $error=$validate->getError();
                 if(!isset($error['user'])){
                    $error['user']='';
                 }
                if(!isset($error['pwd'])){
                    $error['pwd']='';
                 }
                 return json_encode($error); 

             }else{
                
                 return json_encode(['status'=>1]);
             }

        	return;
        }

    	return view();
    }
}
