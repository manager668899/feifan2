<?php
class Wexin
{  

	protected $appid='wx0a2c5388d006520f';
	protected $appsecret='1ae0412d23b257e6ea90082b5bc53ce9';
	public function config()
	{
       $signature=$_GET['signature'];
		$timestamp=$_GET['timestamp'];
		$nonce=$_GET['nonce'];
		$echostr=$_GET['echostr'];
		$token='zhang123';
		$arr=array($token,$timestamp,$nonce);
		sort($arr);
		$str=implode($arr);
		$newstr=sha1($str);
		if($newstr==$signature){
		   echo $echostr;
		}
	}
 public function curl($url,$type='get',$res='json',$arr=''){
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

	public function fromMsg()
	{
       $obj=$GLOBALS['HTTP_RAW_POST_DATA']; 
       $postSql=simplexml_load_string($obj,'SimpleXMLElement',LIBXML_NOCDATA);
       //$this->log($postSql->Content);
       // $this->log($obj);

         switch ($postSql->MsgType){
             	case 'text':
             	        if($postSql->Content=='图文'){
             	        	$this->ttt($postSql);
             	        	return;
             	        }
             		$this->toMsg($postSql);
             		break;
             	case 'image':
             		$this->toImg($postSql);
             		break;

             	case 'voice':
             		$this->toVoi($postSql);
             		break;             	
             	default:
             		$this->toDef($postSql);
             		break;
             }    
	}
	public function toMsg($postSql)
	{
	    $xml="<xml>
			<ToUserName><![CDATA[%s]]></ToUserName>
			<FromUserName><![CDATA[%s]]></FromUserName>
			<CreateTime>%s</CreateTime>
			<MsgType><![CDATA[text]]></MsgType>
			<Content><![CDATA[%s]]></Content>
			</xml>";

        $FromUserName=$postSql->ToUserName;
        $ToUserName=$postSql->FromUserName;
        $CreateTime=$postSql->CreateTime=time();
        $Content=$postSql->Content;
		$str=sprintf($xml,$ToUserName,$FromUserName,$CreateTime,$Content);

		echo $str;
		$this->log($str);

	}
	//调试
	public function toImg($postSql)
	{
			    $xml="<xml>
			<ToUserName><![CDATA[%s]]></ToUserName>
			<FromUserName><![CDATA[%s]]></FromUserName>
			<CreateTime>%s</CreateTime>
			<MsgType><![CDATA[text]]></MsgType>
			<Content><![CDATA[%s]]></Content>
			</xml>";

        $FromUserName=$postSql->ToUserName;
        $ToUserName=$postSql->FromUserName;
        $CreateTime=$postSql->CreateTime=time();
        $Content=$postSql->Content='你输入的图片我不认识';
		$str=sprintf($xml,$ToUserName,$FromUserName,$CreateTime,$Content);

		echo $str;
		$this->log($str);
	}
	public function toVoi($postSql)
	{
       $this->toDef($postSql);
	}

	public function toDef($postSql)
	{
		 $xml="<xml>
			<ToUserName><![CDATA[%s]]></ToUserName>
			<FromUserName><![CDATA[%s]]></FromUserName>
			<CreateTime>%s</CreateTime>
			<MsgType><![CDATA[text]]></MsgType>
			<Content><![CDATA[%s]]></Content>
			</xml>";
        $FromUserName=$postSql->ToUserName;
        $ToUserName=$postSql->FromUserName;
        $CreateTime=$postSql->CreateTime=time();
        $Content=$postSql->Content='我不知道你输入的内容';
		$str=sprintf($xml,$ToUserName,$FromUserName,$CreateTime,$Content);

		echo $str;
	}
 //回复图文消息
 public function ttt($postSql)
 {
		    $xml="<xml>
		<ToUserName><![CDATA[%s]]></ToUserName>
		<FromUserName><![CDATA[%s]]></FromUserName>
		<CreateTime>%s</CreateTime>
		<MsgType><![CDATA[news]]></MsgType>
		<ArticleCount>2</ArticleCount>
		<Articles>
		<item>
		<Title><![CDATA[%s]]></Title> 
		<Description><![CDATA[%s]]></Description>
		<PicUrl><![CDATA[%s]]></PicUrl>
		<Url><![CDATA[%s]]></Url>
		</item>
		<item>
		<Title><![CDATA[%s]]></Title>
		<Description><![CDATA[%s]]></Description>
		<PicUrl><![CDATA[%s]]></PicUrl>
		<Url><![CDATA[%s]]></Url>
		</item>
		</Articles>
		</xml>";
		$FromUserName=$postSql->ToUserName;
        $ToUserName=$postSql->FromUserName;
        $CreateTime=$postSql->CreateTime=time();
        $title1='这里是是百度标题';
        $des1='这里是描述百度地址';
        $PicUrl1='https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1508906865982&di=a6a5b3e8b79a47e922e0620b30eff7fd&imgtype=0&src=http%3A%2F%2Fimg5.duitang.com%2Fuploads%2Fitem%2F201405%2F15%2F20140515202615_cYJZ3.jpeg';
        $url1='https://www.baidu.com/';
        $title2='这里腾讯标题2';
        $des2='这里是腾讯图片';
        $PicUrl2='https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1508907290047&di=b6076a7a0202e8b62d156d355d07874e&imgtype=0&src=http%3A%2F%2Fg.hiphotos.baidu.com%2Fzhidao%2Fpic%2Fitem%2F5882b2b7d0a20cf40755f24b74094b36adaf9958.jpg';
        $url2='http://www.qq.com/';
		$str=sprintf($xml,$ToUserName,$FromUserName,$CreateTime,$title1,$des1,$PicUrl1,$url1,$title2,$des2,$PicUrl2,$url2);
		echo $str;
		$this->log($str);
     

 }
 public function log($data='')
	{
        $dir=fopen('loga.txt', 'w');
        fwrite($dir,$data);
        fclose($dir);
	}

}

$obj=new Wexin();
if(isset($_GET['echostr'])){
   $obj->config();
}else{
   $obj->fromMsg();	
}


