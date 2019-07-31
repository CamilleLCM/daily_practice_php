<?php
//快速排序
function quickSort($arr){
    $arrLength = count($arr);
    if($arrLength<=1){
        return $arr;
    }
    $base_arr = $arr[0];
    $left_arr = [];
    $right_arr = [];
    for($i=1;$i<$arrLength;$i++){
        if($arr[$i]<$base_arr) {
            $left_arr[] = $arr[$i];
        }else{
            $right_arr[] = $arr[$i];
        }
    }
    $left_arr = quickSort($left_arr);
    $right_arr = quickSort($right_arr);
    //因为$base_arr是数组第一个元素要用拼接数组函数就需要转换成数组操作
    return array_merge($left_arr,array($base_arr),$right_arr);

}
$arr = array(8,9,1,4,5,3,7,1);
var_dump(quickSort($arr));