<?php
//求n以内的质数
/*
 * 1、质数的定义：一个大于1的自然数，除了1和它本身以外不能被其他自然数整除的数
 * 2、偶数都不是质数
 * 3、如果用2到根号n之间的整数去除，均无法整除，则n为质数
 */
function getPrime($n){
    //必须是自然数
    $n = intval($n);
    //必须大于1
    if($n<1){
        return false;
    }
    //先设置flag为1，表示真
    $flag = 1;
    //2是最小的质数
    $prime = [2];
    //偶数都不是质数
    for($j = 3;$j <= $n;$j+=2) {
        $sqrt_num = intval(sqrt($j));
        //用2到根号n之间的整数去除
        for ($i = 2; $i <= $sqrt_num; $i++) {
            //如果能整除flag为0，表示假
            if ($j % $i == 0) {
                $flag = 0;
            }
        }
        //如果不能被整除，为质数，添加进数组
        if($flag == 1){
            array_push($prime,$j);
        }
        //将flag又变为初始的1
        $flag = 1;
    }

print_r($prime);

}
getPrime(100);
?>