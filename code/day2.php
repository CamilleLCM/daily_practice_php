<?php
//编写一个php函数，找出一个字符串中出现"hello"这个单词的所有位置
function getAdress($str){
    //统计出hello在该字符串中出现了几次
    $count = substr_count($str,'hello');
    $j = 0;
    for($i = 0;$i<$count;$i++){
        //查找hello在该字符串中出现的位置，strpos()第三个参数为可选，规定在何处开始搜索
        $j = strpos($str,'hello',$j);
        //找到了一个位置后存进数组
        $adress[] = $j;
        //从下一个位置开始继续查找
        $j++;
    }
    var_dump($adress);

}

getAdress("hello! can you speak 'hello word!'?");