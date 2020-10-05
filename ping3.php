<?php
$ip = $_GET["ip"];
$info = array();
if(substr(php_uname("s"),0,3) == "Win")
{
	header("content-type:text/html;charset=GBK");
	$sc = system("ping $ip",$info);
	header("content-type:text/html;charset=UTF-8");
	echo iconv("GBK","UTF-8",$sc);
}
else
{
	header("content-type:text/html;charset=UTF-8");
	$sc = system("ping -c 3 $ip",$info);
	echo $sc;
}
?>
