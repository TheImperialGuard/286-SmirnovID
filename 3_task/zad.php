<?php
	//https://www.php.net/manual/ru/functions.arguments.php
	//https://www.w3schools.com/php/php_includes.asp
	function getPlus10($n) {
		return ($n + 10);
	}
	echo $a = getPlus10(3);
	echo '<br>', '<br>';
	function pythagoras($n, $h) {
		return (pow($n, 2) + pow($h, 2));
	}
	echo $a = pythagoras(2, 5);
	echo '<br>', '<br>';
	function col(...$arr) {
		echo $y = count($arr);
	}
	col(4, 5, 6, 78, 3, 4);
	echo '<br>', '<br>';
	function srznach(...$arr) {
		$a = array_sum($arr);
		$b = count($arr);
		echo $a / $b;
	}
	srznach(5, 5, 5, 5);
	echo '<br>', '<br>';
	function op($n, $f, $op) {
		if ($op == '+') {
			return ($n + $f);
			} else {
			if ($op == '-') {
				$e = $n - $f;
				$g = $f - $n;
				return ("$e and $g");
				} else {
				if ($op == '*') {
					return ($n * $f);
					} else {
					$e = $n / $f;
					$g = $f / $n;
					return ("$e and $g");
				}
			}
		}
	}
	echo op(4, 2, '+'), '<br>';
	echo op(4, 2, '-'), '<br>';
	echo op(4, 2, '*'), '<br>';
	echo op(4, 2, '/'), '<br>';
?>