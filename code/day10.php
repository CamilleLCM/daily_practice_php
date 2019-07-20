<?php
//找出有序数组中随机3个数和为零的所有情况
function sumZero($arr){
    $count = count($arr);
    $result = [];
    for ($i = 0;$i < $count;$i++ ){
        $left = $i + 1;
        $right = $count-1;
        while ($left < $right){
            $sum = $arr[$i] + $arr[$left] + $arr[$right];
            if($sum < 0){
                $left++;
            }elseif ($sum > 0){
                $right--;
            }else{
                $value = $arr[$i].','.$arr[$left].','.$arr[$right];
                if(!in_array($value,$result)){
                    $result[] = $value;
                }
                $left++;
                $right--;

            }
        }
    }
    var_dump($result);
}
$arr = [-7,-5,-4,-2,-1,1,2,3,4,5,6,7,8,9];
sumZero($arr);