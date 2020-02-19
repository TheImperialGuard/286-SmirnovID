<?php
	class Form {
		public $name, $password, $email, $upfile, $bdate;
		function SaveFile() {
				$destiation_dir = dirname(__FILE__) . '/uploadedFiles/' . $this->upfile['name'];
			    move_uploaded_file($this->upfile['tmp_name'], $destiation_dir);
			    echo '<p>Файл загружен</p>';
		}
		function DeleteFile() {
			$destiation_dir = dirname(__FILE__) . '/uploadedFiles/' . $this->upfile['name'];
			unlink($destiation_dir);
		}
	}
	$newForm = new Form();
	$newForm->name = $_POST['name'];
	$newForm->password = $_POST['password'];
	$newForm->email = $_POST['email'];
	$newForm->upfile = $_FILES['upfile'];
	$newForm->bdate = $_POST['bdate'];
	$newForm->SaveFile();
?>	
<a href="../../main.php">На главную</a>