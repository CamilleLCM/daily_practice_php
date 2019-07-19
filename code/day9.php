<?php
//将一个数组反转
function arrReverse($arr){
    //计算原数组的元素个数
    $count = count($arr);
    //遍历将每个值都放入数组的首位
    foreach ($arr as $key=>$value){
     array_unshift($arr,$value);
    }
    //删除从数组个数开始到数组结尾的元素
    array_splice($arr,$count);
    var_dump($arr);
}
$arr = [1,2,3,4,5];
arrReverse($arr);