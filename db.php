<?php

define('DB_DRIVER', 'mysql');
define('DB_HOST', 'localhost');
define('DB_NAME', 'kinoteatr');
define('DB_USER', 'root');
define('DB_PASSWORD', '');

$db = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

if (!$db) {
	die('Ошибка подключения к базе данных!');
}
?>