<?php
//使用冒泡排序将一个数组按升序排列
function paoSort($arr){
    $count=count($arr);
    for ($i=0;$i<$count;$i++){
        for ($j=0;$j<$count-1;$j++){
            if($arr[$j]>$arr[$j+1]){
                $temp = $arr[$j+1];
                $arr[$j+1]=$arr[$j];
                $arr[$j]=$temp;
            }

        }
    }
    var_dump($arr);
}
paoSort(array(5,7,9,1,0,1,3,4,2));
