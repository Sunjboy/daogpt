<?php
$webnames = $_SERVER['HTTP_HOST'];
$doname = array('47.115.208.20');
if($_GET['a']){
	print_r($doname);
}
if(!in_array($webnames,$doname)){
	exit;
}
?>