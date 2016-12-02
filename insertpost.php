<?php
	include('urenboek.php');
	//Vars VOOR DATABASE
	$server = "localhost";
	$user = "root";
	$password = "usbw";
	$db = "urenboek";
	
	//VARS VOOR SQL CODE
	$TimeStart = $_SESSION['TimeStart'];
	$TimeStop = $_SESSION['TimeStop'];
	$Locatie = $_POST['locatie'];
	$Vak = $_POST['vak'];
	$Werkzaamheden = $_POST['werkzaamheden'];
	$User = $_SESSION['Username'];
	
	//Datum kiezen
	date_default_timezone_set('Europe/Amsterdam');
	$Date = date("y-m-d");
	
	//Database verbinding
	mysql_connect($server, $user, $password) or die("Geen verbinding met database mogelijk");
	mysql_select_db($db) or die ("Database niet gevonden");
	
	//Gegevens invoeren in database
	$QUERY = "INSERT INTO `posts`(`PostID`, `User`, `Tijd-in`, `Tijd-uit`, `Datum`, `Locatie`, `Vak`, `Werkzaamheden`) VALUES (NULL, '$User', '$TimeStart' ,'$TimeStop', '$Date','$Locatie', '$Vak', '$Werkzaamheden');" ;
	mysql_query($QUERY) or die ("Mislukt om gegevens toe te voegen. query is:<br> " .$QUERY);
	
	echo("<div class='saved'>");
	echo("Het is gelogged! Klik op view om het te zien");
	echo("</div>");
	
	
	//Sessies verwijderen
	unset($_SESSION['TimeStart']);
	unset($_SESSION['TimeStop']);
	
?>