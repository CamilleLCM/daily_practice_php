<?php
//在不用str_replace()函数情况下，将字符串"ohello world"中的'o'都替换成'n'

//方法一：效率更低，思维更普遍
function replace(){
    $str = "ohello world";
    $length = strlen($str);
    for($i = 0;$i<$length;$i++){
        if ($str[$i]=='o'){
            $str[$i]='n';
        }
    }
    echo $str;
}
replace();

//方法二：逻辑性更强，更可取
function replace1(){
    $str = "ohello world!";
    while (true){
        //找到o的位置
        $key = strpos($str,'o');
        //  == 松散比较，'o'在第一位就退出循环，此处使用 === 严格比较。
        if($key === false){
            break;
        }else{
            $str[$key] = 'n';
        }
    }
    echo $str;
}
replace1();