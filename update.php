<?php

require_once 'db.php';

$id = $_POST['id'];
$name = $_POST['name'];
$description = $_POST['description'];
$start_date = $_POST['start_date'];
$start_time = $_POST['start_time'];
$duration = $_POST['duration'];
//$count = $_POST['num_tickets'];
$price = $_POST['price_tickets'];

$update = "UPDATE `seans` SET `name_film` = '$name', `description` = '$description', `start_date` = '$start_date', `start_time` = '$start_time',  `duration` = '$duration', `price_ticket` = '$price' WHERE `seans`.`id` = '$id'";
mysqli_query($db, $update);

header("Location: /index.php");