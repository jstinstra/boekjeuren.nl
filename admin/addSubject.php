<?php
	include('vakToevoegen.php');
	//Vars VOOR DATABASE
	$server = "localhost";
	$user = "root";
	$password = "usbw";
	$db = "urenboek";
	
	//VARS VOOR SQL CODE
	$Vak = $_POST['Vak'];


	//Database verbinding
	mysql_connect($server, $user, $password) or die("Geen verbinding met database mogelijk");
	mysql_select_db($db) or die ("Database niet gevonden");
	
	//Gegevens invoeren in database
	if(isset($_POST["post"])){
		$QUERY= "INSERT INTO `urenboek`.`vakken` (`Vak`) VALUES ('$Vak');";
		mysql_query($QUERY) or die ("Mislukt om gegevens toe te voegen. query is:<br> " .$QUERY);
		echo "Vak succesvol toegevoegd";
	}

?>