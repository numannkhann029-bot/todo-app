<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "todo_db";

$conn = mysqli_connect($host, $user, $password, $database, 3307);

if (!$conn) {
    die("Database Connection Failed: " . mysqli_connect_error());
}

?>