<!DOCTYPE html>

<?php
session_start();
require_once("../check.php");
require_once("../groupcheckadmin.php");
// Turn off all error reporting
error_reporting(0);
?>

<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Urenboek</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="css/bootstrap.css" rel="stylesheet">
		<link href="css/styles.css" rel="stylesheet">
		<link href="css/bootstrap-datepicker.css" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link href="css/styles.css" rel="stylesheet">
	</head>
	<body>
	
	
<div class="navbar navbar-default navbar-static-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Logboek</a>
    </div>
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Adminpanel</a></li>
        <li><a href="logout.php">Logout</a></li>
      </ul>
      <!--<ul class="nav navbar-nav navbar-right">
        <li><a href="#Posts">posts</a></li>
      </ul>--->
    </div>
  </div>
</div>

<div class="container">
  <div class="invoegbalk">
  <div class="text-center">
    <h1>Voeg de nieuwe leerlingen toe</h1>
    <p class="lead">Het kan soms een tijdje duren</p>
  </div>

<?php  

//connect to the database 
$connect = mysql_connect("localhost","root","usbw"); 
mysql_select_db("urenboek",$connect); //select the table 
// 


//Upload File
if (isset($_POST['submit'])) {
	if (is_uploaded_file($_FILES['filename']['tmp_name'])) {
		echo "<h1>" . "File ". $_FILES['filename']['name'] ." uploaded successfully." . "</h1>";
		echo "<h2>Displaying contents:</h2>";
		readfile($_FILES['filename']['tmp_name']);
	}

	//Import uploaded file to Database
	$handle = fopen($_FILES['filename']['tmp_name'], "r");

	while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
		$import="INSERT into account(Leerlingnummer,Wachtwoord,Klas,Voornaam,Achternaam,Tussenvoegsel) values('$data[0]','$data[1]','$data[2]','$data[3]','$data[4]','$data[5]')";

		mysql_query($import) or die(mysql_error());
	}

	fclose($handle);

	print "Import klaar";

	//view upload form
}else {

	print "Upload een nieuwe csv door erop te klikken in uw documenten en vervolgens upload<br />\n";

	print "<form enctype='multipart/form-data' action='addleerling.php' method='post'>";

	print "Bestands naam om te importeren:<br />\n";

	print "<input size='50' type='file' name='filename'><br />\n";

	print "<input type='submit' name='submit' value='Upload'></form>";

}

?>
	<form action= "Leerling.php" method="post">

		<h2> Voeg handmatig iemand toe </h2>
		<input type="text" name="Leerlingnummer" placeholder="Leerlingnummer"></input><br>
		<input type="text" name="Voornaam" placeholder="Voornaam"></input>
		<input type="text" name="Achternaam" placeholder="Achternaam"></input>
		<input type="text" name="Tussenvoegsel" placeholder="Tussenvoegsel"></input><br>
		<input type="text" name="Klas" placeholder="Klas"></input><br>
		<input type="password" name="Wachtwoord" placeholder="Wachtwoord"></input><br>
		
		
		<input type="submit" value="Toevoegen"></input>

	</form>
  </div>
</div>


	<!-- /.container -->
	<!-- script references -->

		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/bootstrap-datepicker.js"></script>
	</body>
</html>