<?php

require_once 'db.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="assets/style_index.css">
	<title>Kinoteatr</title>
</head>
	<form >
		<a href="create_front.php">Создать новый сеанс</a>
		<a href="search1.php">Найти сеанс</a>
	</form>
	<table>
		<tr>
			<th>Номер сеанса</th>
			<th>Название фильма</th>
			<th>Описание фильма</th>
			<th>Дата начала</th>
			<th>Время начала</th>
			<th>Длительность фильма (в минутах)</th>
			<th>Количество билетов</th>
			<th>Цена билета (в рублях)</th>
			<th>Выручка (в рублях)</th>
		</tr>

		<?php
		// Read
		$seans = mysqli_query($db, "SELECT * FROM `seans`");
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

				<td><a href="buy_tickets.php?id=<?= $game[0] ?>">Купить билеты<a/></td>
				<td><a href="updatefront.php?id=<?= $game[0] ?>">Изменить<a/></td>
				<td><a href="delete.php?id=<?= $game[0] ?>">Удалить<a/></td>
			</tr>

			<?php
		}
		?>
	</table>
</body>
</html>