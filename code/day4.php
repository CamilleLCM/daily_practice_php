<?php
//�ڲ���str_replace()��������£����ַ���"ohello world"�е�'o'���滻��'n'

//����һ��Ч�ʸ��ͣ�˼ά���ձ�
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

//���������߼��Ը�ǿ������ȡ
function replace1(){
    $str = "ohello world!";
    while (true){
        //�ҵ�o��λ��
        $key = strpos($str,'o');
        //  == ��ɢ�Ƚϣ�'o'�ڵ�һλ���˳�ѭ�����˴�ʹ�� === �ϸ�Ƚϡ�
        if($key === false){
            break;
        }else{
            $str[$key] = 'n';
        }
    }
    echo $str;
}
replace1();