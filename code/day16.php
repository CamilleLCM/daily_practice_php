<?php
//��һ����ҳ��ַ������ٶ���ҳ��http://www.baidu.com����εõ��������ݡ�
$readcontents = fopen("http://www.baidu.com", "rb");
$contents = stream_get_contents($readcontents);
fclose($readcontents);
echo $contents;
