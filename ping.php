<?php
//这个文件是子文件。
//父文件必须放在可执行危险命令的Windows服务器中，你可以借用现成的父文件，子文件只要可执行php的设备就行了（php版本推荐>7.0），可以父、子文件放在同一设备。注意修改$url参数。
$ip = $_GET["url"];
header("content-type:text/html;charset=GBK");
//$url值为子文件位置及get表单参数
$url = file_get_contents("http://49.234.90.182/ping2.php?url=$ip");
header("content-type:text/html;charset=UTF-8");
echo iconv("GBK","UTF-8",$url);
//echo $url;
?>