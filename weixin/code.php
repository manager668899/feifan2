<?php
require_once('gettoken.php');
class Code extends Gettoken
{
	public function ss()
	{ 
	   if(isset($_GET['code'])){
			   $code=$_GET['code'];
			}else{
				exit();
			}
	   $appid=$this->appid;
	   $appsecret=$this->appsecret;

       $url="https://api.weixin.qq.com/sns/oauth2/access_token?appid={$appid}&secret={$appsecret}&code={$code}&grant_type=authorization_code";
       //$data=header("Location:$url");
       $data=$this->curl($url);
       
       $this->getuser($data);

	}
	public  function getuser($data)
	{
      
        
        $url="https://api.weixin.qq.com/sns/userinfo?access_token={$data['access_token']}&openid={$data['openid']}&lang=zh_CN";
        $user=$this->curl($url);
         
        setcookie('openid',$data['openid'],time()+3600*24);
        
        echo "<!DOCTYPE html>
        <html lang='en'>
        <head>
        	<meta charset='UTF-8'>
        	<title>Document</title>
        </head>
        <body>
        	 <div>
        	    
        	        <p>{$user['nickname']}</p>
        	        <p>{$user['city']}</p>
        	        <p>{$user['province']}</p>
        	        <p><img src='{$user["headimgurl"]}' width='20%'/></p>
        	          
        	 </div>
        </body>
        </html>";

	}

}


$obj=new Code();
$obj->ss();