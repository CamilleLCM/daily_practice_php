<?php
//ʵ��һ�����������ַ��� ��hello_world��ת���� "HelloWorld","hello_zhong_guo"ת���ɡ�HelloZhongGuo
function upString($str){
    $result = '';
    if(is_string($str)){
        //�ָ������
        $arr = explode('_',$str);
        foreach ($arr as $value){
            //ucfirst()��һ����ĸ��д
            $result .= ucfirst($value);
        }
    }else{
        $result = '�������ַ���';
    }
    echo $result;
}
upString('hello_zhong_guo');