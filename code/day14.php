<?php
/*�����û�����һ���ַ���$string,Ҫ��$string��ֻ�ܰ�������0�����ֺ�Ӣ�Ķ��ţ�
 *����������ʽ��֤�����ڲ�����Ҫ���$string���س�����Ϣ
 */
function rex($string){
    if(preg_match("/^[1-9,]+$/",$string)){
        echo "suc";
    }else{
        echo "fail";
    }
}
rex('102');