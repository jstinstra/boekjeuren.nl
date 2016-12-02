<?php

	//Vars VOOR DATABASE
	$server = "localhost";
	$user = "root";
	$password = "usbw";
	$db = "urenboek";

	mysql_connect($server, $user, $password) or die("Geen verbinding met database mogelijk");
	mysql_select_db($db) or die ("Database niet gevonden");
	

	$Leerlingnummer = $_POST["Leerlingnummer"];
	$Wachtwoord = $_POST["Wachtwoord"];
	$Klas = $_POST["Klas"];
	$Voornaam = $_POST["Voornaam"];
	$Achternaam = $_POST["Achternaam"];
	$Tussenvoegsel = $_POST["Tussenvoegsel"];


	$query = "INSERT INTO `urenboek`.`account` (`Leerlingnummer`, `Wachtwoord`, `Klas`, `Voornaam`, `Achternaam`, `Tussenvoegsel`, `FirstLogin`, `GroupID`) VALUES ('$Leerlingnummer', '$Wachtwoord', '$Klas', '$Voornaam', '$Achternaam', '$Tussenvoegsel', '0', '0');";

	
	mysql_query($query) or die(mysql_error());
	echo("<h2>Student succesvol toegevoegd.</h2>");	
	include("addleerling.php");

?>