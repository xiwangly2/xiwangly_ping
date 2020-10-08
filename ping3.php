<?php
$ip = $_GET["ip"];
if(substr(php_uname("s"),0,3) == "Win")
{
	header("content-type:text/html;charset=GBK");
	$sc = shell_exec("ping $ip");
	header("content-type:text/html;charset=UTF-8");
	echo iconv("GBK","UTF-8",$sc);
}
else
{
	header("content-type:text/html;charset=UTF-8");
	$sc = shell_exec("ping -c 3 $ip");
	echo $sc;
}
?>
