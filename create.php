<?php

require_once 'db.php';

$name = $_POST['name'];
$description = $_POST['description'];
$start_date = $_POST['start_date'];
$start_time = $_POST['start_time'];
$duration = $_POST['duration'];
$count = $_POST['num_tickets'];
$price = $_POST['price_tickets'];
$revenue = "0";

$query = "INSERT INTO `seans` (`id`, `name_film`, `description`, `start_date`, `start_time`, `duration`, `num_tickets`, `price_ticket`, `revenue`) VALUES (NULL, '$name', '$description', '$start_date', '$start_time', '$duration', '$count', '$price', '$revenue')";
mysqli_query($db, $query);

header("Location: /index.php");
?>