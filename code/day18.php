<?php
//插入排序
function insertSort($arr)
{
   $count = count($arr);
   for ($i = 1; $i < $count; $i++) { //从第二个开始比较
    for ($j = $i-1; $j >= 0; $j--) { //与前面的书比较找到插入的位置 
        if ($arr[$j]>$arr[$j+1]) { //比前面的数小，交换位置
          $temp = $arr[$j];
          $arr[$j] = $arr[$j+1];
          $arr[$j+1] = $temp;
        }else{ //大于或等于前面的数表示已经找到插入的位置
          break;
        }
    }
   }
   print_r($arr);
}

$arr = [5,9,10,3,2];
insertSort($arr);