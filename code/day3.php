<?php
//猴子选大王
/*
 *一群猴子排成一圈，按1，2，...，n依次编号，
 * 然后从第1只开始数，数到第m只,把它踢出圈，
 * 从它后面再开始数，再数到第m只，再把它踢出去...，
 * 如此不停地进行下去，直到最后只剩下一只猴子为止，
 * 那只猴子就叫做大王。要求编程模拟此过程，
 * 输入m、n,输出最后那个大王的编号。
 *
 */
function monkeyKing($n,$m){
   //构建数组
    for($i = 1;$i<=$n;$i++){
        $monkey[] = $i;
    }
    //当猴子数量大于1时还要进行筛选
    $i = 0;
    while(count($monkey)>1){
        (($i+1)%$m != 0 && array_push($monkey,$monkey[$i]));
        unset($monkey[$i]);
        $i++;
    }
    var_dump($monkey);
}
monkeyKing(6,8);
?>