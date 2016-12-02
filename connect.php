<?php

$server = "localhost";
$user = "root";
$password = "usbw";
$db = "urenboek";


$conn = new mysqli($server, $user, $password, $db);


if ($conn -> connect_error) {
	die("Verkeerde dingen wss" . $conn->connect_error);
}

?>