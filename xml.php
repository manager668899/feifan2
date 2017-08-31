<?php
// $xml=new DOMDocument();
// //echo '<pre>';
// //var_dump($xml);
// $xml->load('index.xml');
// $data=$xml->saveXML();
// //loadXML($xml);
// //var_dump($data);
// var_dump($jj);


$xml=simplexml_load_file("index.xml");//php 解析 xml
var_dump($xml);
echo '<hr/>';
echo $xml->ss;
echo $xml->aa;
echo '<hr/>';





foreach ($xml as $key => $value) {
	  //var_dump($value);
	 echo  $value->getName() .$value .'<br/>';
	  // echo '<hr/>';
	 echo $value->children();
	
}