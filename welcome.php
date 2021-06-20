<?php
	$firstname = $_REQUEST['firstname'];
	$lastname = $_REQUEST['lastname'];

	echo 'Добро пожаловать на наш сайт, ' .
	htmlspecialchars($firstname, ENT_QUOTES, 'UTF-8') . ' ' .
	htmlspecialchars($lastname, ENT_QUOTES, 'UTF-8') . '!';
?>