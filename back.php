<?php

session_start();

require_once 'db.php';

$num = $_POST['query'];

if (!empty($num) && is_numeric($num)) {

	$sql = mysqli_query($db, "SELECT * FROM `seans` WHERE `seans`.`id` = '$num1'");
	$sql = mysqli_fetch_all($sql);

	$_SESSION['num'] = $num;

} else {
	$_SESSION['message1'] = 'Введите номер сеанса (число)';
	$_SESSION['num'] = 0;
}


header("Location: /search1.php");

?>