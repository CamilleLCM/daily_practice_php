<?php
//有一个网页地址，比如百度主页：http://www.baidu.com，如何得到它的内容。
$readcontents = fopen("http://www.baidu.com", "rb");
$contents = stream_get_contents($readcontents);
fclose($readcontents);
echo $contents;
