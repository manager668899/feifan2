<?php
require_once('web.php');
class Exec extends Weixin
{


          public function delMune()
          { 
          	 $token='UgaMpBH2sPDs6HD8Kls1frM74zGeb1UZJ1AdlMdGwhPPXR1-CtU73OTvOfmPyo7jtAG8DadOo_FegPY8860b5_6lEJl1aXoDC48cj8ZRN_NqQ_2jXNX1Nv3iqcnPML1WZUYiAEAMHL';
          	 $url="https://api.weixin.qq.com/cgi-bin/menu/delete?access_token={$token}";
          	 var_dump($this->curl($url));
          }

}

$obj=new Exec();
$obj->delMune();