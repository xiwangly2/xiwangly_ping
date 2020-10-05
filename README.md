# xiwangly_ping
xiwangly_全新的ping

10.5更新
>新增`ping3.php`同时支持Windows和Linux的服务器的测试，需要在php中开放危险函数`system`
7.31更新
>父文件必须放在可执行危险命令的服务器（Windows或Linux）中，你可以借用现成的父文件API，子文件只要可执行php的设备就行了（php版本推荐>7.0），可以父、子文件放在同一设备。注意修改$url参数。
>代码中给出了测试用公用地址（<http://xiwangly.top/ping.php?url=>），如果你有自己的服务器建议用你自己的服务器的地址
>出于安全考虑，只开放php的`system`命令即可
>ping文件夹用于快捷访问`ping.php`
