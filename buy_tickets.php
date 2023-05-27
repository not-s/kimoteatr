<?php

session_start();

require_once 'db.php';

$seans_id = $_GET['id'];

$change_seans = mysqli_query($db, "SELECT * FROM `seans` WHERE `id` = '$seans_id'");
$change_seans = mysqli_fetch_assoc($change_seans);

?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="assets/style_tickets.css">
	<title>Buy</title>
</head>
<body>
	<form action="tickets.php" method="POST" enctype="multipart/form-data">
		<h2>Купить билеты на сеанс</h2>

		<label for="Title">Название: </label>
		<input id="Title" type="text" name="name" value="<?= $change_seans['name_film'] ?>" readonly ><br><br>

		<label for="Start_date">Дата: </label>
		<input id="Start_date" name="start_date" value="<?= $change_seans['start_date'] ?>" readonly></input><br><br>

		<label for="Start_time">Время начала: </label>
		<input id="Start_time" name="start_time" value="<?= $change_seans['start_time'] ?>" readonly></input><br><br>

		<label for="Pricetic">Цена билета: </label><br>
		<input id="Pricetic" name="price_tickets" value="<?= $change_seans['price_ticket'] ?>" readonly></input><br><br>

		<label for="Pricetic">Количество билетов: </label><br>
		<input id="Pricetic" name="buy_tickets" type="number" min="1" max="300" required ></input><br><br>

		<input type="submit" value="Купить">

		<?php
		if ($_SESSION['message']) {
			echo '<p class="msg">' . $_SESSION['message'] . '</p>';
		}
		unset($_SESSION['message']);
		?>

		<input type="hidden" name="id" value="<?= $change_seans['id'] ?>"><br><br>
		<input type="hidden" name="num_tickets" value="<?= $change_seans['num_tickets'] ?>"><br><br>
		<input type="hidden" name="revenue" value="<?= $change_seans['revenue'] ?>"><br><br>

	</form>
</body>
</html>