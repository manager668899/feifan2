<?php
namespace app\Admin\controller;
use think\Request;
use think\Validate;

class Index
{

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
                  //到数据库查询出来 和输入的数据最对比
                  $obj=model('Login');
                  $bool=$obj->yy($data);
                  if($bool){
                    return json_encode(['status'=>1]);
                  }else{
                    return json_encode(['status'=>0]);
                  }
                 
             }

        	return;
        }

    	return view();
    }
}
