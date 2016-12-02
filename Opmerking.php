<?php
	$server = "localhost";
	$user = "root";
	$password = "usbw";
	$db = "urenboek";
	
	
	$conn = mysql_connect($server, $user, $password, $db);
	$id = $_POST['PostID'];

if(!$_POST){ die('nope'); }

$opmerking = $_POST['opmerking'];

$id = $_POST['PostID'];

if(!isset($opmerking) && !isset($id)) { die('nope2.');}

$sql = "UPDATE `urenboek`.`posts` SET `Opmerking` = '$opmerking' WHERE `posts`.`PostID` = $id;";
mysql_query($sql) or die ("Mislukt om gegevens toe te voegen. query is:<br> " .$sql);

include("urenboekadmin.php");
echo "<div class='alert alert-success'>Opmerking succesvol toegevoegd</div>";	
?>
