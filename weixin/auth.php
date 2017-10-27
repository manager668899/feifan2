<?php
require_once('gettoken.php');
class Auth extends Gettoken
{ 
public function aaa(){
   $appid='wx0a2c5388d006520f';
   $type="snsapi_userinfo";
   $newurl=urlencode('http://www.php029.top/weixin/code.php');
   $url="https://open.weixin.qq.com/connect/oauth2/authorize?appid={$appid}&redirect_uri={$newurl}&response_type=code&scope={$type}&state=STATE#wechat_redirect";
   header("Location:$url");
  }
}

$obj=new Auth();
$obj->aaa();