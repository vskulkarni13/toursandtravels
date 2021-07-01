<?php

require 'dbconfig/db.php';

$name =$_GET['name'];

$sql = "delete from USER_INFO where name ='$name'";


$val = $db->query($sql);

if($val){


header('location: admin.php');

};
?>