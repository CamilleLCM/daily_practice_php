<?php
//���������ĵ����Լ����ʵĳ���
function maxWord($sentence){
	$word = explode(' ',$sentence);
	$word_num = count($word);
	$max_user = '';
	for($i = 0;$i < $word_num;$i++){
		if(strlen($max_user)<strlen($word[$i])){
			$max_user = $word[$i];
		}
	}
	$strLength = strlen($max_user);
	echo "������ĵ���Ϊ".$max_user."����Ϊ".$strLength;
}
maxWord('my name is Camille');