<?php

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
	<link rel="stylesheet" type="text/css" href="assets/style_create.css">
	<title>Update</title>
</head>
<body>
	<form action="update.php" method="POST" enctype="multipart/form-data">
		<h2>Изменить данные сеанса</h2>

		<label for="Title">Название: </label>
		<input id="Title" type="text" name="name" placeholder="Название фильма" minlength="1" maxlength="50" required value="<?= $change_seans['name_film'] ?>"><br><br>

		<label for="Description">Описание: </label><br>
		<textarea id="Description" type="text" name="description" placeholder="Описание фильма" minlength="10" maxlength="150" required><?= $change_seans['description'] ?></textarea>

		<br><br><label for="Start_date">Дата: </label>
		<input id="Start_date" type="date" name="start_date" required value="<?= $change_seans['start_date'] ?>"></input><br><br>

		<label for="Start_time">Время начала: </label>
		<input id="Start_time" type="time" name="start_time" required value="<?= $change_seans['start_time'] ?>"></input><br><br>

		<label for="Duration">Длительность: </label>
		<input id="Duration" type="number" name="duration" min="10" max="600" required value="<?= $change_seans['duration'] ?>"><br><br>

		<label for="Pricetic">Цена билета: </label><br>
		<input id="Pricetic" type="number" name="price_tickets" min="100" max="1000" required value="<?= $change_seans['price_ticket'] ?>"></input><br><br>

		<input type="submit" value="Изменить">

		<input type="hidden" name="id" value="<?= $change_seans['id'] ?>"><br><br>

	</form>
</body>
</html>