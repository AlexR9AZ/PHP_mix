<?php
	if (!isset($_REQUEST['firstname'])) {
		include 'form.html.php';
	}
	else {
		$firstname = $_REQUEST['firstname'];
		$lastname = $_REQUEST['lastname'];
		if ($firstname == 'Alex' || $lastname == 'Kovalenko') {
			$output = 'Добро пожаловать Senior Developer !';
		}
		else {
			$output = 'Добро пожаловать на наш сайт, ' . 
			htmlspecialchars($firstname, ENT_QUOTES, 'UTF-8') . ' ' .
			htmlspecialchars($lastname, ENT_QUOTES, 'UTF-8') . '!';
		}

		include 'welcome.html.php';
	}
?>