<?php
//输出句中最长的单词以及单词的长度
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
	echo "句中最长的单词为".$max_user."长度为".$strLength;
}
maxWord('my name is Camille');