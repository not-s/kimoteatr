<?php

require_once 'db.php';

$seans_id = $_GET['id'];

$delete_seans = mysqli_query($db, "DELETE FROM `seans` WHERE `seans`.`id` = '$seans_id'");

header("Location: /index.php");
?>