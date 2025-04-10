<?php

$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "vkr";

$connect = new mysqli($hostname, $username, $password, $dbname);

if ($connect->connect_error) {
    die("Ошибка подключения к базе данных: " . $connect->connect_error);
}

return $connect;
?>