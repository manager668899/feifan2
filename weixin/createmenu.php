<?php
require_once('gettoken.php');
class Createmenu extends Gettoken
{
	public function jj()
	{   
		$access_token=$this->gettokentxt();
		$url="https://api.weixin.qq.com/cgi-bin/menu/create?access_token={$access_token}";
		$arr='{
	"button":[
		{"name":"小龙女",
		  "sub_button":[
		       {
		          "type":"click",
		          "name":"李若彤1",
		          "key":"你好"
		       },
		       	{
		          "type":"view",
		          "name":"李若彤2",
		          "url":"http://www.baidu.com"
		       },
		        {
		          "type":"view",
		          "name":"李若彤3",
		          "url":"http://www.baidu.com"
		       }
		   ]
		 },
		{
		  "name":"天山派",
		  		  "sub_button":[
		       {
		          "type":"view",
		          "name":"李若彤1",
		          "url":"http://www.baidu.com"
		       },
		       	{
		          "type":"view",
		          "name":"提醒",
		          "url":"http://www.php029.top/weixin/msg.php"
		       },
		        {
		          "type":"view",
		          "name":"授权",
		          "url":"http://www.php029.top/weixin/auth.php"
		       }

		   ]  
		},
		{  
		   "name":"我的操作",
		  		  "sub_button":[
		       {
		          "type":"view",
		          "name":"李若彤1",
		          "url":"http://www.baidu.com"
		       },
		       	{
		          "type":"view",
		          "name":"李若彤2",
		          "url":"http://www.baidu.com"
		       },
		        {
		          "type":"view",
		          "name":"李若彤3",
		          "url":"http://www.baidu.com"
		       },
		       {
		          "type":"view",
		          "name":"提醒消费",
		          "url":"http://www.php029.top/weixin/msg.php"
		       },
		        {
		          "type":"view",
		          "name":"授权",
		          "url":"http://www.php029.top/weixin/auth.php"
		       }

		   ]
		}
	]
}';
		$ss=$this->curl($url,'post','json',$arr);
		var_dump($ss); 
	}
}
$obj=new Createmenu();
$obj->jj();