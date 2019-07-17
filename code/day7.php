<?php
//找出两个有序数字数组中的相同元素(不使用array_intersect()交集函数)
function sameNum($arr,$brr){
    $same = [];
    $i = $j = 0;
    $arrNum = count($arr);
    $brrNum = count($brr);
    while($i < $arrNum && $j < $brrNum){
        //如果a数组的第一位小于b数组的第一位就用a数组的第二位和b数组的第一位再比，以此类推
        if($arr[$i]<$brr[$j]){
            $i++;
            //如果a数组的第一位大于b数组的第一位就用a数组的第一位和b数组的第二位再比，以此类推
        }elseif ($arr[$i]>$brr[$j]){
            $j++;
        }else{
            //如果a数组的元素等于b数组的元素时，将该元素保存进新数组,再同时移到下一位进行比较
            $same[] = $arr[$i];
            $i++;
            $j++;
        }
    }
    //去重，以保证两个数组都有相同的元素时不输出重复的
    $crr = array_unique($same);
    var_dump($crr) ;
}
sameNum(array(1,2,3,4,4,5,6,7),array(3,4,4,5,6));

?>