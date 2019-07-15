<?php
//将 1234567890 转换为 1,234,567,890 每3位用逗号隔开的形式。
function dealStr(){
    $str = '1234567890';
    //反转字符串
    $str = strrev($str);
    //每隔3个字符用逗号隔开
    $str = chunk_split($str,3,',');
    //去掉最右边的逗号
    $str = rtrim($str,',');
    //再次反转
    $str  = strrev($str);
    echo $str;
}
dealStr();
