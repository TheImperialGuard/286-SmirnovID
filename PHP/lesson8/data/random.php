<?php
    if($_POST['minznach'] >= 0 and $_POST['maxznach'] < 101){
		$a = rand($_POST['minznach'], $_POST['maxznach']);
		echo "<p aling=\"center\">Сгенерированное число: $a</p>";
	}else{
		echo "<p aling=\"center\">Вы ввели неверные данные</p>";
	}
?>
<p><a href="info/index.php?id=Случайное число">Назад</a></p>