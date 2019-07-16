<?php
//给定一个有序整数序列，找出绝对值最小的元素
function minNum(array $arr){
    $start = 0;
    $end = count($arr)-1;
     //都为正数
    if($arr[0]>0){
        return $arr[0];
    }
    //都为负数
    if($arr[$end]<0){
        return $arr[$end];
    }
    //有正有负(二分查找)
    while($start<$end){
        $mid = floor($start+$end)/2;
        //中间数大于零，因为数组是升序，绝对值最小肯定在左边
        if($arr[$mid]>0){
            //中间数左边一位还是大于零，那么需要在$start和$mid-1区间进行查找
            if($arr[$mid-1]>0){
                $end = $mid-1;
            }else{
                //中间数左边一位小于零，那么说明这两个数是数组中正负交界点，返回这两个数的绝对值较小的。
                return abs($arr[$mid])<abs($arr[$mid-1])?$arr[$mid]:$arr[$mid-1];
            }
            //中间数小于零，因为数组是升序，绝对值最小肯定在右边
        }elseif($arr[$mid]<0){
            //中间数右边一位还是小于零，那么需要在$mid+1和$end区间进行查找
            if($arr[$mid+1]<0){
                $start = $mid+1;
            }else{
                //中间数右边一位大于零，那么说明这两个数是数组中正负交界点，返回这两个数的绝对值较小的。
                return abs($arr[$mid])<abs($arr[$mid+1])?$arr[$mid]:$arr[$mid+1];
            }
        }else{
            //中间数等于零，零的绝对值为最小，直接返回。
            return $arr[$mid];
        }
    }

}
$sortArr = [-5,-4,-2,1,3];
echo minNum($sortArr), PHP_EOL;
?>