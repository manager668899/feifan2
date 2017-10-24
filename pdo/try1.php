<?php

 function checkNum($number)
 {
	 if($number>1)
	 {
	    throw new Exception("Value must be 1 or below");
	 }
	 return true;
 }

 
 try
 {   
 	
     checkNum(2);


     echo 'uuuuuuuu';
 }catch(Exception $e)
 {
    echo 'Message: ' .$e->getMessage();
 }
 ?> 