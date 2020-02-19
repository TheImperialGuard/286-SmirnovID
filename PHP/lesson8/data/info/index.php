<?php

$id = $_GET['id'];

$text = file_get_contents("data2/$id");
?>
<h1 align="center">Информация</h1>
<hr>
<p>Навигация:
<?php
$files = scandir('data2');

foreach($files as $file){
	if(is_file('data2/' . $file)){
	     echo "<a href=\"index.php?id=$file\">$file</a> ";
	 }	
}
?>
</p>
<hr>
<?php
 echo nl2br($text);
?>
<hr>
<a href="../../main.php">На главную</a>
