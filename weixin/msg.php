<?php
require_once('gettoken.php');
class Msg extends Gettoken
{
    public function yy($openid='')
    { 
    	//$sss="{{first.DATA}} 订单商品：{{keyword1.DATA}} 订单编号：{{keyword2.DATA}} 支付金额：{{keyword3.DATA}} 支付时间：{{keyword4.DATA}} {{remark.DATA}";
    	$mm=[
         'touser'=>$openid,
         'template_id'=>'I9Vm3MF1q1fQg1qJEza-Ph6daIBCnxW5uY13bilNVgw',
         'url'=>'http://www.php029.top/weixin/auth.php',
         'data'=>
            [
         	'first'=>['value'=>'恭喜你购买成功','color'=>'#173177'],
         	'keyword1'=>['value'=>'88元','color'=>'#173177'],
         	'keyword2'=>['value'=>'88元','color'=>'#173177'],
         	'keyword3'=>['value'=>'88元','color'=>'#173177'],
         	'keyword4'=>['value'=>'88元','color'=>'#173177'],
         	'remark'=>['value'=>'88元','color'=>'#173177']
           ],
    	];
        $json=json_encode($mm);
       $access_token=$this->gettokentxt();
       $url="https://api.weixin.qq.com/cgi-bin/message/template/send?access_token={$access_token}";
       $this->curl($url,'post','json',$json);

    }
}

if(!isset($_COOKIE['openid'])){
    header('Location: http://www.php029.top/weixin/auth.php');
}
$openid=$_COOKIE['openid'];
echo $openid;
$obj=new Msg();
$obj->yy($openid);