<?php
/*对于用户输入一串字符串$string,要求$string中只能包含大于0的数字和英文逗号，
 *请用正则表达式验证，对于不符合要求的$string返回出错信息
 */
function rex($string){
    if(preg_match("/^[1-9,]+$/",$string)){
        echo "suc";
    }else{
        echo "fail";
    }
}
rex('102');