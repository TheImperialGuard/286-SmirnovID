<?php
	echo strtoupper('php'), '<br>', '<br>';
	echo strtolower('PHP'), '<br>', '<br>';
	echo ucfirst('london'), '<br>', '<br>';
	echo strtolower('London'), '<br>', '<br>';
	$a = explode(' ', 'london is the capital of great britain');
	echo ucfirst($a[0]), ' ', ucfirst($a[1]), ' ', ucfirst($a[2]), ' ', ucfirst($a[3]), ' ', ucfirst($a[4]), ' ', ucfirst($a[5]), ' ', ucfirst($a[6]), '<br>', '<br>';
	$str = 'html css php';
	echo strlen($str), '<br>', '<br>';
	$password = '123125134523';
	$b = strlen($password);
	if ($b < 10 and $b > 5) {
		echo 'Пароль подходит';
		} else {
		echo 'Придумайте другой пароль';
	}
	echo '<br>', '<br>';
	echo substr('html css php', 0, 4), '<br>', substr('html css php', 5, 3), '<br>', substr('html css php', 9, 3), '<br>', '<br>';
	$c = 'aijsnhlaglhiahg';
	echo substr($c, -3), '<br>', '<br>'; // задача 10
	$str2 = 'http://www.facebook.com';
	$d = substr($str2, 0, 7);
	if ($d == 'http://') {
		echo 'да';
		} else {
		echo 'нет';
	}
	echo '<br>', '<br>';
	$str3 = 'http://www.facebook.com';
	$e = substr($str3, 0, 8);
	$f = substr($str3, 0, 7);
	if ($e == 'https://' or $f == 'http://') {
		echo 'да';
		} else {
		echo 'нет';
	}
	echo '<br>', '<br>';
	$str4 = 'lol.png';
	$g = substr($str4, -4);
	if ($g == '.png') {
		echo 'да';
		} else {
		echo 'нет';
	}
	echo '<br>', '<br>';
	$str5 = 'photo.jpg';
	$a2 = substr($str5, -4);
	if ($a2 == '.png' or $a2 == '.jpg') {
		echo 'да';
		} else {
		echo 'нет';
	}
	echo '<br>', '<br>';
	$str6 = 'hello there';
	$b2 = strlen($str6);
	if ($b2 > 5) {
		echo substr($str6, 0, 5), '...';
		} else {
		echo $str6;
	}
	echo '<br>', '<br>';
	// Работа с str_replace
	$str7 = '31.12.2013';
	echo str_replace('.', '-', $str7), '<br>', '<br>';
	$str9 = 'avbrcd';
	$newstr = str_replace('a', '1', $str9);
	$newstr2 = str_replace('b', '2', $newstr);
	echo str_replace('c', '3', $newstr2), '<br>', '<br>';
	$newstr4 = '1a2b3c4d5e6f7g8h9h';
	$mass = array('1', '2', '3', '4', '5', '6', '7', '8', '9', '0');
	echo str_replace($mass, '', $newstr4), '<br>', '<br>';
	//Работа с strtr
	$str01 = 'aahhbbggccjj';
	echo strtr($str01, 'abc', '123'), '<br>';
	$mass2 = array('a' => '1', 'b' => '2', 'c' => '3');
	echo strtr($str01, $mass2), '<br>', '<br>';
	$str02 = 'General_Kenobi';
	echo substr_replace($str02, '!!!', 3, 5), '<br>', '<br>';
	$str03 = 'abc abc abc';
	echo 'Позиция первой буквы b - ', strpos($str03, 'b'), '<br>', '<br>';
	echo 'Позиция последней буквы b - ', strrpos($str03, 'b'), '<br>', '<br>';
	echo 'Позиция первой буквы b, начиная с 3 позиции - ', strpos($str03, 'b', 3), '<br>', '<br>';
	$str04 = 'aaa aaa aaa aaa aaa';
	echo 'Позиция второго пробела - ', strpos($str04, ' ', 4), '<br>', '<br>';
	$str05 = 'afhalifh.aDGUG';
	$c02 = strpos($str05, '..');
	if ($c02 == false) {
		echo 'нет';
		} else {
		echo 'есть';
	}
	echo '<br>', '<br>';
	$d02 = strpos($str2, 'http://');
	if ($d02 == 0) {
		echo 'да';
		} else {
		echo 'нет';
	}
	echo '<br>', '<br>';
	// Работа с explode, implode
	$e02 = explode(' ', $str);
	echo $e02[0], '<br>', $e02[1], '<br>', $e02[2], '<br>', '<br>';
	echo $str06 = implode(', ', $e02), '<br>', '<br>';
	$date = '2013-12-31';
	$f02 = explode('-', $date);
	echo $f02[2], '.', $f02[1], '.', $f02[0], '<br>', '<br>';
	//str_split
	$str07 = '1234567890';
	$array1 = str_split($str07, 2);
	echo $array1[0], ' ', $array1[1], ' ', $array1[2], ' ', $array1[3], ' ', $array1[4], '<br>', '<br>';
	$array1 = str_split($str07);
	echo $array1[0], ' ', $array1[1], ' ', $array1[2], ' ', $array1[3], ' ', $array1[4], $array1[5], ' ', $array1[6], ' ', $array1[7], ' ', $array1[8], ' ', $array1[9], ' ', '<br>', '<br>';
	$array1 = str_split($str07, 2);
	echo $array1[0], '-', $array1[1], '-', $array1[2], '-', $array1[3], '-', $array1[4], '<br>', '<br>';
	//trim, ltrim, rtrim
	echo trim('  sefujsek  ');
	echo '<br>', '<br>';
	echo trim('/php/', '/');
	echo '<br>', '<br>';
	//35
	$strn = 'слова слова слова.';
	echo rtrim($strn, '.'), '.', '<br>', '<br>';
	//strrev
	echo strrev('12345'), '<br>', '<br>';
	$strn1 = 'otto';
	$strn2 = strrev($strn1);
	if ($strn2 == $strn1) {
		echo 'Слово ', $strn1, ' является палиндромом';
		} else {
		echo 'Слово ', $strn1, ' не является палиндромом';
	}
	echo '<br>', '<br>';
	//str_shuffle
	echo str_shuffle('Iron Man'), '<br>', '<br>';
	$strn3 = 'qwertyuiopasdfghjklzxcvbnm';
	$shuffledstrn3 = str_shuffle($strn3);
	echo substr($shuffledstrn3, 0, 6), '<br>', '<br>';
	echo number_format('12345678', 0, 0, ' '), '<br>', '<br>';
	for ($i = 1;$i < 10;$i++) echo str_repeat('x', $i), '<br>';
	echo '<br>', '<br>';
	$x = 1;
	for ($ii = 1;$ii < 10;$ii++) {
		echo str_repeat($x, $ii), '<br>';
		$x++;
	}
	echo '<br>', '<br>';
	//trip_tags и htmlspecialchars
	echo strip_tags('html, <b>php</b>, js'), '<br>', '<br>';
	echo strip_tags('<i>html</i>, <b>php</b>, <a>js</a>', '<i><b>'), '<br>', '<br>';
	echo htmlspecialchars('html, <b>php</b>, js', ENT_HTML401, ini_get("default_charset"), false);
	echo '<br>', '<br>';
	//chr и ord
	echo ord('a'), '<br>', ord('b'), '<br>', ord('c'), '<br>', ord(' '), '<br>', '<br>';
	echo ord('a'), '-', ord('z'), ' and ', ord('A'), '-', ord('Z'), '<br>', '<br>';
	echo chr(33), '<br>', '<br>';
	$hh = rand(65, 90);
	echo $ww = chr($hh);
	echo '<br>', '<br>';
	$len = rand(1, 20);
	$tt = 0;
	$ll = '';
	for ($i = 1;$i != $len;$i++) {
		$tt = rand(97, 122);
		$ll = $ll . chr($tt);
	}
	echo $ll;
	echo '<br>', '<br>';
	$bb = 'b';
	$gg = ord($bb);
	if ($gg < 91) {
		echo 'буква ', $bb, ' заглавная';
		} else {
		echo 'буква ', $bb, ' строчная';
	}
	echo '<br>', '<br>';
	echo strchr('ad-cd-ef', '-');
	echo '<br>', '<br>';
	echo strrchr('ad-cd-ef', '-');
	echo '<br>', '<br>';
	echo strstr('ad--cd--ef', '-');
	echo '<br>', '<br>';
	//zadachi
	$kkk = 'var_test_text';
	$fff = explode('_', $kkk);
	$fff[1] = ucfirst($fff[1]);
	$fff[2] = ucfirst($fff[2]);
	echo $kkk = implode($fff);
	echo '<br>', '<br>';
	$last = array(33, 35, 22, 48, 3);
	for ($jj = 0;$jj < 5;$jj++) {
		$last2 = strpos($last[$jj], '3');
		if ($last2 !== false) {
			echo $last[$jj], ', ';
		}
	}
?>