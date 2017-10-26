<?php
require_once('web.php');
class Gettoken extends Wexin
{
	public function getpushtokens()
	{
		$appid=$this->appid;
		$appsecret=$this->appsecret;
        $url="https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid={$appid}&secret={$appsecret}";
        $token=$this->curl($url);
        $hr=fopen('token.txt','w');
        fwrite($hr, $token['access_token']);
        fclose($hr);

        $hrs=fopen('time.txt','w');
        fwrite($hrs, time());
        fclose($hrs);

	}
	public function gettokentxt()
	{
		
		 $createtime=file_get_contents('time.txt');
         $time=time()-$createtime;
		  if($time>7000){
               $this->getpushtokens();
		  }
		 
         $str=file_get_contents('token.txt'); 
		 return $str;
	}

}


//$obj=new Gettoken();
//echo $obj->gettokentxt();