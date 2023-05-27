<?php

session_start();

$exit = $_POST['exit'];

if (isset($exit)) {
	$_SESSION['num'] = 0;
	header("Location: /index.php");
}

?>