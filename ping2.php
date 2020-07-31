<?php
//这个文件是父文件。
//父文件必须放在可执行危险命令的服务器（Windows或Linux）中，你可以借用现成的父文件，子文件只要可执行php的设备就行了（php版本推荐>7.0）可以父、子文件放在同一设备。
$ip = $_GET["url"];
header("content-type:text/html;charset=GBK");
$info = array();
if(substr(php_uname("s"),0,3) == "Win")
{
	$sc = system("ping $ip",$info);
}
else
{
	$sc = system("ping -c 3 $ip",$info);
}
//header("content-type:text/html;charset=UTF-8");
//echo iconv("GBK","UTF-8",$sc);
echo $sc;
?>
