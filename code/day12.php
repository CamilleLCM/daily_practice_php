<?php
//实现一个函数，将字符串 “hello_world”转换成 "HelloWorld","hello_zhong_guo"转换成“HelloZhongGuo
function upString($str){
    $result = '';
    if(is_string($str)){
        //分割成数组
        $arr = explode('_',$str);
        foreach ($arr as $value){
            //ucfirst()第一个字母大写
            $result .= ucfirst($value);
        }
    }else{
        $result = '请输入字符串';
    }
    echo $result;
}
upString('hello_zhong_guo');