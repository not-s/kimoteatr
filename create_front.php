<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="assets/style_create.css">
	<title>Create</title>
</head>
<body>
	<form action="create.php" method="POST" enctype="multipart/form-data">
		<h2>Создание нового сеанса</h2>

		<label for="Title">Название: </label>
		<input id="Title" type="text" name="name" placeholder="Название фильма" minlength="1" maxlength="50" required ><br><br>

		<label for="Description">Описание: </label><br>
		<textarea id="Description" type="text" name="description" placeholder="Описание фильма" minlength="10" maxlength="300" required></textarea><br><br>

		<label for="Start_date">Дата: </label>
		<input id="Start_date" type="date" name="start_date" required></input><br><br>

		<label for="Start_time">Время начала: </label>
		<input id="Start_time" type="time" name="start_time" required></input><br><br>

		<label for="Duration">Длительность (в минутах): </label>
		<input id="Duration" type="number" name="duration" min="10" max="600" required><br><br>

		<label for="cTickets">Количество билетов: </label><br>
		<input id="cTickets" type="number" name="num_tickets" min="100" max="300" required></input><br><br>

		<label for="Pricetic">Цена билета: </label><br>
		<input id="Pricetic" type="number" name="price_tickets" min="100" max="1000" required></input><br><br>

		<input type="submit" value="Создать">
	</form>
</body>
</html>