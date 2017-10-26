<?php
require_once('web.php');
class Exec{

	     function curl($url,$type='get',$res='json',$arr=''){
            $ch=curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); //禁止输出
            //curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            //curl_setopt($ch, CURLOPT_HEADER, 0);  //可以取消了
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
                                // CURLOPT_SSL_VERIFYPEER => false,
                               //  CURLOPT_SSL_VERIFYHOST => false
             if($type=='post'){
                curl_setopt($ch, CURLOPT_POST, 1);
                curl_setopt($ch, CURLOPT_POSTFIELDS, $arr);
             }
            $output=curl_exec($ch);
                if($output === false)
                        {
                            echo 'Curl error: ' . curl_error($ch);
                        }
            curl_close($ch);
             if($res=='json'){
                  return  json_decode($output,true);
             }
            //return $output;
            }

          public function delMune()
          { 
          	 $token='UgaMpBH2sPDs6HD8Kls1frM74zGeb1UZJ1AdlMdGwhPPXR1-CtU73OTvOfmPyo7jtAG8DadOo_FegPY8860b5_6lEJl1aXoDC48cj8ZRN_NqQ_2jXNX1Nv3iqcnPML1WZUYiAEAMHL';
          	 $url="https://api.weixin.qq.com/cgi-bin/menu/delete?access_token={$token}";
          	 var_dump($this->curl($url));
          }

}

$obj=new Exec();
$obj->delMune();