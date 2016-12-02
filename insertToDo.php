<?php
	include("todo.php");
	session_start();
	//Vars VOOR DATABASE
	require('connect.php');;
	
	//VARS VOOR SQL CODE
	$Vak = $_POST['vak'];
	$Nodig = $_POST['Nodig'];
	$WieNodig = $_POST['WieNodig'];
	$Tijd = $_POST['Tijd'];
	$prior = $_POST['prior'];
	$datum = $_POST['datum'];
	$User = $_SESSION['Username'];
	
	
	//Gegevens invoeren in database
	$QUERY = "INSERT INTO `todo`(`ToDoID`,`User`, `Vak`, `Nodig`, `WieNodig`, `Tijd`, `prior`, `Datum`) VALUES (NULL, '$User', '$Vak', '$Nodig' ,'$WieNodig', '$Tijd','$prior','$datum');" ;
	mysql_query($QUERY) or die ("Mislukt om gegevens toe te voegen. query is:<br> " .$QUERY);
	
	echo("<div class='saved'>");
	echo("Het is gelogged! Klik op view om het te zien");
	echo("</div>");

	
	
?>