<?php
	function fa($n) {
		if ($n < 0) {
			return ("Факториала числа $n не существует");
			} else {
			if ($n <= 1) {
				return 1;
				} else {
				return $n * fa($n - 1);
			}
		}
	}
	echo fa(5);
	echo '<br>', '<br>';
    $arr = [
      'id'    => '1',
      'name'  => 'item1',
      'items' => [
        [
	        'id'    => '2',
            'name'  => 'item2',
            'items' =>[]
	    ],
	    [
	        'id'    => '3',
            'name'  => 'item3',
            'items' =>[]
	    ],
	    [
	        'id'    => '4',
            'name'  => 'item4',
            'items' =>[
	   	        [
			   'id'    => '5',
			   'name'  => 'item5',
			   'items' =>[]
		        ],
                [
			      'id'    => '6',
			      'name'  => 'item6',
			      'items' =>[]
		        ], 			
		    ], 
	    ],
      ]
    ];
	//https://dead142.github.io/design/
	function spok($arr) {
		if (is_array($arr)) {
			foreach ($arr as $str) {
				spok($str);
			}
			} else {
			echo "<li>$arr</li>";
		}
	}
	spok($arr);
?>