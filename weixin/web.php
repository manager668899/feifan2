<?php
class Wexin
{
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
	public function fromMsg()
	{
       $obj=$GLOBALS['HTTP_RAW_POST_DATA']; 
       $postSql=simplexml_load_string($obj,'SimpleXMLElement',LIBXML_NOCDATA);
       //$this->log($postSql->Content);
       // $this->log($obj);

       if($postSql->MsgType=='text'){
                $this->toMsg($postSql);

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
	public function log($data='')
	{
        $dir=fopen('logq.txt', 'w');
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


