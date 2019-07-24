<?php
//写一个函数，计算数值数组中最大数和最小数的差。
function diff($arr)
{
    $count = count($arr);
    $max = $arr[0];
    $min = $arr[0];
    for ($i = 1; $i < $count; $i++) {
        $max = $max > $arr[$i] ? $max : $arr[$i];
        $min = $min < $arr[$i] ? $min : $arr[$i];
    }
    $diff = $max - $min;
    echo $diff;
}
$arr = array(-1,1,2,0,3,4,-2);
diff($arr);