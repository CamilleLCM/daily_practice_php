<?php
//��һ�����鷴ת
function arrReverse($arr){
    //����ԭ�����Ԫ�ظ���
    $count = count($arr);
    //������ÿ��ֵ�������������λ
    foreach ($arr as $key=>$value){
     array_unshift($arr,$value);
    }
    //ɾ�������������ʼ�������β��Ԫ��
    array_splice($arr,$count);
    var_dump($arr);
}
$arr = [1,2,3,4,5];
arrReverse($arr);