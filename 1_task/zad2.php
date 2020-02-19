<?php

$str = 'Бережков Андрей Вячеславоич'; 
$str2 = explode(' ', $str);
$a = substr($str, 17, 2);
$b = substr($str, $start = 30, $length = 2);
echo $str = $str2[0],' ' , $a,'.' , $b;
?>