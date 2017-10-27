<?php
$json=' {
           "touser":"OPENID",
           "template_id":"ngqIpbwh8bUfcSsECmogfXcV14J0tQlEpBO27izEYtY",
           "url":"http://weixin.qq.com/download",  
           "miniprogram":{
             "appid":"xiaochengxuappid12345",
             "pagepath":"index?foo=bar"
           },          
           "data":{
                   "first": {
                       "value":"恭喜你购买成功！",
                       "color":"#173177"
                   },
                   "keynote1":{
                       "value":"巧克力",
                       "color":"#173177"
                   },
                   "keynote2": {
                       "value":"39.8元",
                       "color":"#173177"
                   },
                   "keynote3": {
                       "value":"2014年9月22日",
                       "color":"#173177"
                   },
                   "remark":{
                       "value":"欢迎再次购买！",
                       "color":"#173177"
                   }
           }
       }';
echo '<pre>';       

$ss=json_decode($json,true);
var_dump($ss);
      $mm=[
         'touser'=>'openid',
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
echo '<hr/>';
var_dump(json_encode($mm));