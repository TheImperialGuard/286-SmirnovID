<?php
//http://old.code.mu/tasks/php/base/rabota-s-funkciyami-dlya-massivov-v-php.html
function d() {
    global $i;
    echo '<br>', '<br>';
    printf("<span style='color: blue'>Задание $i</span>");
    echo '<br>', '<br>';
    $i++;
}
$i = 2;
//1
printf("<span style='color: blue'>Задание 1</span>");
echo '<br>', '<br>';
$arr = [1, 23, 432, 943, 22];
echo count($arr);
d();
//2
$a = count($arr);
echo $arr[$a - 1];
d();
//3
if (in_array(3, $arr)) {
    echo 'Есть элемент со значением 3';
} else {
    echo 'Нет элемента со значением 3';
}
d();
//4
$arr = [1, 2, 3, 4, 5];
echo array_sum($arr);
d();
//5
echo array_product($arr);
d();
//6
$b = array_product($arr);
echo $b / $a;
d();
//7
$arr = range(1, 100);
echo $arr[0], '-', $arr[99];
d();
//8
$arr = range('a', 'z');
echo $arr[0], '-', $arr[25];
d();
//9
$arr = range(1, 9);
echo $str = implode('-', $arr);
d();
//10
$arr = range(1, 100);
echo array_sum($arr);
d();
//11
$arr = range(1, 10);
echo array_product($arr);
d();
//12
$arr = [1, 2, 3];
$arr2 = ['a', 'b', 'c'];
$a = array_merge($arr, $arr2);
print_r($a);
d();
//13
$arr = [1, 2, 3, 4, 5];
$arr2 = array_slice($arr, 1, 3);
print_r($arr2);
d();
//14
array_splice($arr, 1, 2);
print_r($arr);
d();
//15
$arr = [1, 2, 3, 4, 5];
$arr2 = [];
array_splice($arr, 0, 1);
array_splice($arr, -1, 1);
array_splice($arr2, 0, 3, $arr);
print_r($arr2);
d();
//16
$arr = [1, 2, 3, 4, 5];
array_splice($arr, 3, 0, array('a', 'b', 'c'));
print_r($arr);
d();
//17
$arr = [1, 2, 3, 4, 5];
array_splice($arr, 1, 0, array('a', 'b'));
array_splice($arr, 6, 0, 'c');
array_splice($arr, 8, 0, 'e');
print_r($arr);
d();
//18
$arr = ['a' => 1, 'b' => 2, 'c' => 3];
$keys = array_keys($arr);
$values = array_values($arr);
print_r($keys);
echo '<br>';
print_r($values);
d();
//19
$arr = ['a', 'b', 'c'];
$arr2 = [1, 2, 3];
$combine = array_combine($arr, $arr2);
print_r($combine);
d();
//20
$arr = ['a' => 1, 'b' => 2, 'c' => 3];
print_r(array_flip($arr));
d();
//21
$arr = [1, 2, 3, 4, 5];
print_r(array_reverse($arr));
d();
//22
$arr = ['a', '-', 'b', '-', 'c', '-', 'd'];
echo $key = array_search('-', $arr);
d();
//23
array_splice($arr, $key, 1);
print_r($arr);
d();
//24
$arr = ['a', 'b', 'c', 'd', 'e'];
$arr2 = array_replace($arr, array(0 => '!', 3 => '!!'));
print_r($arr2);
d();
//25
$arr = ['3' => 'a', '1' => 'c', '2' => 'e', '4' => 'b'];
sort($arr);
print_r($arr);
echo '<br>';
krsort($arr);
print_r($arr);
d();
//26
$arr = ['a' => 1, 'b' => 2, 'c' => 3];
echo $key = array_rand($arr);
d();
//27
echo $arr[$key];
d();
//28
$arr = [1, 2, 3, 4, 5];
shuffle($arr);
print_r($arr);
d();
//29
$arr = range(1, 25);
shuffle($arr);
print_r($arr);
d();
//30
$arr = range('a', 'z');
shuffle($arr);
print_r($arr);
d();
//31
$arr2 = array_flip($arr);
$randstr = array_rand($arr2, 6);
echo $str = implode($randstr);
d();
//32
$arr = ['a', 'b', 'c', 'b', 'a'];
print_r(array_unique($arr));
d();
//33
$arr = range(1, 5);
echo array_shift($arr), ' ', array_pop($arr), '<br>';
print_r($arr);
d();
//34
$arr = range(1, 5);
array_unshift($arr, 0);
array_push($arr, 6);
print_r($arr);
d();
//35
$arr = range(1, 8);
for ($k = 0;$k < 4;$k++) {
    echo array_shift($arr), array_pop($arr);
}
d();
//36
$arr = ['a', 'b', 'c'];
print_r(array_pad($arr, 6, '-'));
d();
//37
$arr = array_fill(0, 10, 'x');
print_r($arr);
d();
//38
$arr = range(1, 20);
print_r(array_chunk($arr, 5));
d();
//39
$arr = ['a', 'b', 'c', 'b', 'a'];
print_r(array_count_values($arr));
d();
//40
function korni($n) {
    return (sqrt($n));
}
$arr = range(1, 5);
$arr2 = array_map('korni', $arr);
print_r($arr2);
d();
//41
function tegi($n) {
    return (strip_tags($n));
}
$arr = ['<b>php</b>', '<i>html</i>'];
print_r(array_map('tegi', $arr));
d();
//42
function prob($n) {
    return (trim($n));
}
$arr = [' a ', ' b ', ' с '];
print_r(array_map('prob', $arr));
d();
//43
$arr = range(1, 5);
$arr2 = range(3, 7);
$arr3 = array_intersect($arr, $arr2);
print_r($arr3);
d();
//44
$arr3 = array_diff($arr, $arr2);
$arr4 = array_diff($arr2, $arr);
$arr5 = $arr3 + $arr4;
print_r($arr5);
d();
//45
$str = '1234567890';
$arr = str_split($str);
print_r(array_sum($arr));
d();
//46
$arr = range('a', 'z');
$arr2 = range(1, 26);
print_r(array_combine($arr, $arr2));
d();
//47
$arr = range(1, 9);
$arr = array_chunk($arr, 3);
print_r($arr);
d();
//48
$arr = [1, 2, 4, 5, 5];
$max = max($arr);
$max2 = $max;
$f = false;
while ($f === false) {
    $max2 = $max2 - 1;
    $f = array_search($max2, $arr);
}
echo $max2;
?>
