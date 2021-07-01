<?php

$db = new Mysqli;

$db->connect('localhost','root','','main');


if(!$db){
	
	echo "success";
}

?>