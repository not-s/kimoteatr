<?php

session_start();

require_once 'db.php';

$num1 = $_SESSION['num'];
unset($_SESSION['message']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="assets/style_search.css">
	<title>Search</title>
</head>
<body>
	<form action="back.php" method="POST" enctype="multipart">
		<input type="search" name="query">
		<input type="submit" value="Найти">
	</form>
	<table>
		<tr>
			<th>Номер сеанса</th>
			<th>Название</th>
			<th>Описание</th>
			<th>Дата начала</th>
			<th>Время начала</th>
			<th>Длительность</th>
			<th>Количество билетов</th>
			<th>Цена билета</th>
			<th>Выручка</th>
		</tr>

		<?php
		// Read
		$seans = mysqli_query($db, "SELECT * FROM `seans` WHERE `seans`.`id` = '$num1'");
		$seans = mysqli_fetch_all($seans);
		foreach ($seans as $game) {
			?>

			<tr>
				<td><?= $game[0] ?></td>
				<td><?= $game[1] ?></td>
				<td><?= $game[2] ?></td>
				<td><?= $game[3] ?></td>
				<td><?= $game[4] ?></td>
				<td><?= $game[5] ?></td>
				<td><?= $game[6] ?></td>
				<td><?= $game[7] ?></td>
				<td><?= $game[8] ?></td>

			</tr>

			<?php
		}

		?>
	</table><br>
	<?php
		if ($_SESSION['message1']) {
			echo '<p class="msg">' . $_SESSION['message1'] . '</p>';
		}
		unset($_SESSION['message1']);
	?>
	<form action="exit.php" method="POST">
		<input type="submit" name="exit" value="Выйти">
	</form>
</body>
</html>