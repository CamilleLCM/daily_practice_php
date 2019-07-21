<?php
//将数组中的元素打乱
function randArr($arr){
    $count = count($arr);
    for ($i = 0;$i < $count;$i++){
        $rand_num = mt_rand(0,$count-1);
        if ($i != $rand_num){
            $temp = $arr[$i];
            $arr[$i] = $arr[$rand_num];
            $arr[$rand_num] = $temp;
        }
    }
    print_r($arr);
}
$arr = array(1,2,3,4,5,6);
randArr($arr);