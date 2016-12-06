<?php
	session_start();
	include("urenboekadmin.php");

	require('connect.php');

	//VARS VOOR SQL CODE
	$User = $_SESSION['Username'];
	$id = $_POST['PostID'];
	
	$query1 =  mysql_query("SELECT `PostID`, `User`, `Tijd-in`, `Tijd-uit`, `Datum`, `Locatie`, `Vak`, `Check`, `Werkzaamheden`, `Opmerking` FROM `posts` WHERE `PostID` = $id AND `Check` = 1;") or die ("Fout met zoeken");
	$query2 =  mysql_query("SELECT `PostID`, `User`, `Tijd-in`, `Tijd-uit`, `Datum`, `Locatie`, `Vak`, `Check`, `Werkzaamheden`, `Opmerking` FROM `posts` WHERE `PostID` = $id AND `Check` = 2;") or die ("Fout met zoeken");
	$query0 =  mysql_query("SELECT `PostID`, `User`, `Tijd-in`, `Tijd-uit`, `Datum`, `Locatie`, `Vak`, `Check`, `Werkzaamheden`, `Opmerking` FROM `posts` WHERE `PostID` = $id AND `Check` = 0;") or die ("Fout met zoeken");
	$result1 = mysql_num_rows($query1);
	$result2 = mysql_num_rows($query2);
	$result0 = mysql_num_rows($query0);


	if ($result0 == 1){
	$sql =  mysql_query("SELECT `PostID`, `User`, `Tijd-in`, `Tijd-uit`, `Datum`, `Locatie`, `Vak`, `Check`, `Werkzaamheden`, `Opmerking` FROM `posts` WHERE `PostID` = $id AND `Check` = 0;");
	mysql_query($sql);
	$goed = mysql_num_rows($sql);

	if($goed == 1){
	$sql =  mysql_query("UPDATE `urenboek`.`posts` SET `Check` = '1' WHERE `posts`.`PostID` = $id;");
		echo"<div class='alert alert-success' style='text-align: center;'>Goedkeuring goedgekeurd</div>";



	}
	else{
		echo"er is iets fout gegaan";
	}
	}


	if ($result1 == 1){
	$sql1 =  mysql_query("SELECT `PostID`, `User`, `Tijd-in`, `Tijd-uit`, `Datum`, `Locatie`, `Vak`, `Check`, `Werkzaamheden`, `Opmerking` FROM `posts` WHERE `PostID` = $id AND `Check` = 1;");
	mysql_query($sql1);
	$goed2 = mysql_num_rows($sql1);

	if($goed2 == 1){
	$sql1 =  mysql_query("UPDATE `urenboek`.`posts` SET `Check` = '2' WHERE `posts`.`PostID` = $id;");

		echo"<div class='alert alert-danger'  style='text-align: center;'>Goedkeuring Foutgekeurd </div>";
	}
	else{
		echo"er is iets fout gegaan";
	}
	}

	if ($result2 == 1){
	$sql2 =  mysql_query("SELECT `PostID`, `User`, `Tijd-in`, `Tijd-uit`, `Datum`, `Locatie`, `Vak`, `Check`, `Werkzaamheden`, `Opmerking` FROM `posts` WHERE `PostID` = $id AND `Check` = 2;");
	mysql_query($sql2);
	$goed3 = mysql_num_rows($sql2);
	if($goed3 == 1){
	$sql2 =  mysql_query("UPDATE `urenboek`.`posts` SET `Check` = '0' WHERE `posts`.`PostID` = $id;");

		echo"<div class='alert alert-warning' style='text-align: center;'>Goedkeuring leeg</div>";
	}
	else{
		echo"er is iets fout gegaan";
	}
	}

?>
