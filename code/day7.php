<?php
//�ҳ������������������е���ͬԪ��(��ʹ��array_intersect()��������)
function sameNum($arr,$brr){
    $same = [];
    $i = $j = 0;
    $arrNum = count($arr);
    $brrNum = count($brr);
    while($i < $arrNum && $j < $brrNum){
        //���a����ĵ�һλС��b����ĵ�һλ����a����ĵڶ�λ��b����ĵ�һλ�ٱȣ��Դ�����
        if($arr[$i]<$brr[$j]){
            $i++;
            //���a����ĵ�һλ����b����ĵ�һλ����a����ĵ�һλ��b����ĵڶ�λ�ٱȣ��Դ�����
        }elseif ($arr[$i]>$brr[$j]){
            $j++;
        }else{
            //���a�����Ԫ�ص���b�����Ԫ��ʱ������Ԫ�ر����������,��ͬʱ�Ƶ���һλ���бȽ�
            $same[] = $arr[$i];
            $i++;
            $j++;
        }
    }
    //ȥ�أ��Ա�֤�������鶼����ͬ��Ԫ��ʱ������ظ���
    $crr = array_unique($same);
    var_dump($crr) ;
}
sameNum(array(1,2,3,4,4,5,6,7),array(3,4,4,5,6));

?>