<?php
	include('add.php');
	//Vars VOOR DATABASE
	$server = "localhost";
	$user = "root";
	$password = "usbw";
	$db = "urenboek";
	
	//VARS VOOR SQL CODE
	$Groep = $_POST['Groep'];
	$Gebruiker = $_POST['Gebruiker'];


	//Database verbinding
	mysql_connect($server, $user, $password) or die("Geen verbinding met database mogelijk");
	mysql_select_db($db) or die ("Database niet gevonden");
	
	//Gegevens invoeren in database
	if(isset($_POST["post"])){
		$QUERY= "UPDATE `urenboek`.`account` SET `GroupID` = '$Groep' WHERE `account`.`Leerlingnummer` = $Gebruiker;";
		mysql_query($QUERY) or die ("Mislukt om gegevens toe te voegen. query is:<br> " .$QUERY);
		echo "Gebruiker succesvol verplaatst";
	}

?>