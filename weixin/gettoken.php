<?php
require_once('web.php');
class Gettoken extends Wexin
{
	public function gettokens()
	{
		$appid=$this->appid;
		$appsecret=$this->appsecret;
        $url="https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid={$appid}&secret={$appsecret}";
       var_dump($this->curl($url));

	}

}


$obj=new Gettoken();
$obj->gettokens();