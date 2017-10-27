<?php

$appid='wx0a2c5388d006520f';
// $redirect=urlencode('www.php029.top/weixin/auth.php');
// $snsapi_base='snsapi_userinfo';
// 	    $url="https://open.weixin.qq.com/connect/oauth2/authorize?appid={$appid}&redirect_uri={$redirect}&response_type=
// code&scope={$snsapi_base}&state=STATE#wechat_redirect";
// //header("Location:$url");
// header("Location:".$url);
//header("Location:http://www.baidu.com");

$s="snsapi_userinfo";
//$appid=$this->appid;
$REDIRECT_URI=urlencode('http://www.php029.top/weixin/jj.php');
$url="https://open.weixin.qq.com/connect/oauth2/authorize?appid={$appid}&redirect_uri={$REDIRECT_URI}&response_type=code&scope={$s}&state=STATE#wechat_redirect";
header("Location:".$url);