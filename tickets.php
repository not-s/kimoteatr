<?php

session_start();

require_once 'db.php';

$id = $_POST['id'];
$buy_tickets = $_POST['buy_tickets'];
$num_tickets = $_POST['num_tickets'];
$price = $_POST['price_tickets'];
$revenue = $_POST['revenue'];

$name = $_POST['name'];
$description = $_POST['description'];
$start_date = $_POST['start_date'];
$start_time = $_POST['start_time'];
$duration = $_POST['duration'];

if ($num_tickets > $buy_tickets) {
	$num_tickets = $num_tickets - $buy_tickets;

	$revenue = $revenue + $buy_tickets * $price;

	$update_ticket = "UPDATE `seans` SET `num_tickets` = '$num_tickets', `revenue` = '$revenue' WHERE `seans`.`id` = '$id'";
	mysqli_query($db, $update_ticket);

	header("Location: /index.php");

} else {
	$_SESSION['message'] = 'На сеанс осталось только ' . $num_tickets . ' билетов!';

	header("Location: /buy_tickets.php?id=$id");
}
