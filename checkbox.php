<?php
	session_start();
	include("urenboekadmin.php");

	require('connect.php');

	//VARS VOOR SQL CODE
	$User = $_SESSION['Username'];
	$id = $_POST['PostID'];
//query's in variabelen
	$sql = "SELECT `PostID`, `User`, `Tijd-in`, `Tijd-uit`, `Datum`, `Locatie`, `Vak`, `Check`, `Werkzaamheden`, `Opmerking` FROM `posts` WHERE `PostID` = $id AND `Check` = 1";
	$sql1 = "SELECT `PostID`, `User`, `Tijd-in`, `Tijd-uit`, `Datum`, `Locatie`, `Vak`, `Check`, `Werkzaamheden`, `Opmerking` FROM `posts` WHERE `PostID` = $id AND `Check` = 2";
	$sql0 = "SELECT `PostID`, `User`, `Tijd-in`, `Tijd-uit`, `Datum`, `Locatie`, `Vak`, `Check`, `Werkzaamheden`, `Opmerking` FROM `posts` WHERE `PostID` = $id AND `Check` = 0";
//query's uitvoeren in variabelen
	$query1 =  mysqli_query($conn, $sql) or die ("Fout met zoeken");
	$query2 =  mysqli_query($conn, $sql1) or die ("Fout met zoeken");
	$query0 =  mysqli_query($conn, $sql2) or die ("Fout met zoeken");
//Resultaten van query's in variabelen
	$result1 = mysqli_num_rows($query1);
	$result2 = mysqli_num_rows($query2);
	$result0 = mysqli_num_rows($query0);


	if ($result0 == 1){
      $sql2="SELECT `PostID`, `User`, `Tijd-in`, `Tijd-uit`, `Datum`, `Locatie`, `Vak`, `Check`, `Werkzaamheden`, `Opmerking` FROM `posts` WHERE `PostID` = $id AND `Check` = 0";
	$query3 =  mysqli_query($conn, $sql2);

	$goed = mysqli_num_rows($query3);

	if($goed == 1){
	$query4="UPDATE `urenboek`.`posts` SET `Check` = '1' WHERE `posts`.`PostID` = $id;";
	$sql3 =  mysqli_query($conn, $query4);
		echo"<div class='alert alert-success' style='text-align: center;'>Goedkeuring goedgekeurd</div>";



	}
	else{
		echo"er is iets fout gegaan";
	}
	}


	if ($result1 == 1){
		$query5 = "SELECT `PostID`, `User`, `Tijd-in`, `Tijd-uit`, `Datum`, `Locatie`, `Vak`, `Check`, `Werkzaamheden`, `Opmerking` FROM `posts` WHERE `PostID` = $id AND `Check` = 1";
		$sql4 =  mysqli_query($conn, $query5);
	mysqli_query($conn, $query5);
	$goed2 = mysqli_num_rows($sql4);

	if($goed2 == 1){

		$query6 = "UPDATE `urenboek`.`posts` SET `Check` = '2' WHERE `posts`.`PostID` = $id";
		$sql5 =  mysqli_query($conn, $query6);

		echo"<div class='alert alert-danger'  style='text-align: center;'>Goedkeuring Foutgekeurd </div>";
	}
	else{
		echo"er is iets fout gegaan";
	}
	}

	if ($result2 == 1){
	$query7 = "SELECT `PostID`, `User`, `Tijd-in`, `Tijd-uit`, `Datum`, `Locatie`, `Vak`, `Check`, `Werkzaamheden`, `Opmerking` FROM `posts` WHERE `PostID` = $id AND `Check` = 2";
	$sql6 =  mysqli_query($conn, $query7);
	mysqli_query($conn, $sql6);
	$goed3 = mysqli_num_rows($sql6);
	if($goed3 == 1){
	$query8 = "UPDATE `urenboek`.`posts` SET `Check` = '0' WHERE `posts`.`PostID` = $id";
	$sql2 =  mysqli_query($conn, $query8);

		echo"<div class='alert alert-warning' style='text-align: center;'>Goedkeuring leeg</div>";
	}
	else{
		echo"er is iets fout gegaan";
	}
	}

?>
