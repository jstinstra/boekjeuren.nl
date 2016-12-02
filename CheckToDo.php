<?php
	include("todo.php");
	error_reporting(0);
	//Vars VOOR DATABASE
	require('connect.php');

	
	//VARS VOOR SQL CODE
	$User = $_SESSION['Username'];
	$id = $_POST['ToDoID'];
	
	$query1 =  mysql_query("SELECT `ToDoID`, `vak`, `User`, `Nodig`, `WieNodig`, `Tijd`, `prior`, `Datum`, `Check` FROM `todo` WHERE `ToDoID` = $id AND `Check` = 1;") or die ("Fout met zoeken");
	$query2 =  mysql_query("SELECT `ToDoID`, `vak`, `User`, `Nodig`, `WieNodig`, `Tijd`, `prior`, `Datum`, `Check` FROM `todo` WHERE `ToDoID` = $id AND `Check` = 2;") or die ("Fout met zoeken");
	$query0 =  mysql_query("SELECT `ToDoID`, `vak`, `User`, `Nodig`, `WieNodig`, `Tijd`, `prior`, `Datum`, `Check` FROM `todo` WHERE `ToDoID` = $id AND `Check` = 0;") or die ("Fout met zoeken");
	$result1 = mysql_num_rows($query1);
	$result2 = mysql_num_rows($query2);
	$result0 = mysql_num_rows($query0);
	

	
	if ($result0 == 1){
	$sql =  mysql_query("SELECT `ToDoID`, `vak`, `User`, `Nodig`, `WieNodig`, `Tijd`, `prior`, `Datum`, `Check` FROM `todo` WHERE `ToDoID` = $id AND `Check` = 0;");
	mysql_query($sql);
	$goed = mysql_num_rows($sql);	
	
	if($goed == 1){
	$sql =  mysql_query("UPDATE `urenboek`.`todo` SET `Check` = '1' WHERE `todo`.`ToDoID` = $id;");
		echo"<div class='alert alert-success' style='text-align: center;'>Gedaan!</div>";



	}
	else{
		echo"er is iets fout gegaan";
	}
	}

	
	if ($result1 == 1){
	$sql1 =  mysql_query("SELECT `ToDoID`, `vak`, `User`, `Nodig`, `WieNodig`, `Tijd`, `prior`, `Datum`, `Check` FROM `todo` WHERE `ToDoID` = $id AND `Check` = 1;");
	mysql_query($sql1);
	$goed2 = mysql_num_rows($sql1);	
	
	if($goed2 == 1){
	$sql1 =  mysql_query("UPDATE `urenboek`.`todo` SET `Check` = '2' WHERE `todo`.`ToDoID` = $id;");

		echo"<div class='alert alert-danger'  style='text-align: center;'>Niet Gedaan</div>";
	}
	else{
		echo"er is iets fout gegaan";
	}
	}
	
	if ($result2 == 1){
	$sql2 =  mysql_query("SELECT `ToDoID`, `vak`, `User`, `Nodig`, `WieNodig`, `Tijd`, `prior`, `Datum`, `Check` FROM `todo` WHERE `ToDoID` = $id AND `Check` = 2;");
	mysql_query($sql2);
	$goed3 = mysql_num_rows($sql2);
	if($goed3 == 1){
	$sql2 =  mysql_query("UPDATE `urenboek`.`todo` SET `Check` = '0' WHERE `todo`.`ToDoID` = $id;");

		echo"<div class='alert alert-warning' style='text-align: center;'>Niks gebeurt</div>";
	}
	else{
		echo"er is iets fout gegaan";
	}
	}
	
?>