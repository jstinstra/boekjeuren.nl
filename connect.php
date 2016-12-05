<?php

$server     = "localhost";
$user       = "dbuser";
$password   = "DXqgYG4v5yUM9ryH";
$db         = "urenboek";

$conn = new mysqli($server, $user, $password, $db);

if ($conn -> connect_error) {
	die("Database connection error:" . $conn->connect_error);
}

?>