

<!DOCTYPE html>
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
      </ul>
      <!--<ul class="nav navbar-nav navbar-right">
        <li><a href="#Posts">posts</a></li>
      </ul>--->
    </div>
  </div>
</div>

<div class="container">

 
  <div class="text-center">
    <h1>Verwijder gegevens</h1>
  </div>
  
   <div class="row">
   

			<?php
				if(isset($_POST['Leerlingnummer'])){
				   //VARS
				   $Server = "Localhost";
				   $Password = "usbw";
				   $Username = "root";
				   $Db = "urenboek";
				   $Leerlingnummer = $_POST['Leerlingnummer'];
				   $sql = "DELETE FROM account WHERE Leerlingnummer='$Leerlingnummer'";
				   
				   //database stappen
				   $Verbinding = mysql_connect($Server, $Username, $Password);
				   $ChooseDB = mysql_select_db($Db);
				   if(! $Verbinding){
						echo ("<div class='alert alert-danger'>");
						echo ("<strong>Danger!</strong> Kon geen verbinding maken met de database.");
						echo ("</div>");
				   }
				   elseif(! $ChooseDB){
						echo ("<div class='alert alert-danger'>)");
						echo ("<strong>Danger!</strong> Kon database niet vinden.");
						echo ("</div>");
				   }
				   //Query uitvoeren
				   $query = mysql_query($sql);
				   if (! $query){
						echo ("<div class='alert alert-warning'>");
						echo ("<strong>Warning!</strong> Kon query niet succesvol draaien. controleer het nog eens of neem contact op met de beheerder.");
						echo ("</div>");
				   }
				   else{
						echo ("<div class='alert alert-success'>");
						echo ("<strong>Success!</strong> Gegevens succesvol verwijderd.");
						echo ("</div>");
				   }
				}
				   
			   ?>
	   
			   
	   
	   
   
   </script>
   

   
			<?php
			   if(isset($_POST['Klasnaam'])){
				   //VARS
				   require('../connect.php');
				   $Klasnaam = $_POST['Klasnaam'];
				   $sql = "DELETE FROM account WHERE klas='$Klasnaam'";
				   
				   //database stappen
				   $Verbinding = mysql_connect($Server, $Username, $Password);
				   $ChooseDB = mysql_select_db($Db);
				   if(! $Verbinding){
						echo ("<div class='alert alert-danger'>");
						echo ("<strong>Danger!</strong> Kon geen verbinding maken met de database.");
						echo ("</div>");
				   }
				   elseif(! $ChooseDB){
						echo ("<div class='alert alert-danger'> ");
						echo ("<strong>Danger!</strong> Kon database niet vinden.");
						echo ("</div>");
				   }
				   //Query uitvoeren
				   $query = mysql_query($sql);
				   if (! $query){
						echo ("<div class='alert alert-warning'>");
						echo ("<strong>Warning!</strong> Kon query niet succesvol draaien. controleer het nog eens of neem contact op met de beheerder.");
						echo ("</div>");
				   }
				   else{
						echo ("<div class='alert alert-success'>");
						echo ("<strong>Success!</strong> Gegevens succesvol verwijderd.");
						echo ("</div>");
				   }
			   }
			   
   
   ?>

   
   </div>
  <div class="row">
  
	<!-- Verwijder een leerling -->
	<div class="col-sm-6" style="Padding-top: 10%;">
		<div class="text-center">
		
			<form action="DeleteLeerling.php" method="Post">
				<table border=0>
					<tr>
						<th colspan=2>Verwijder een leerling</th>
					</tr>
					<tr>
						<th>
							Leerlingnummer
						</th>
						<th>
							<input type="text" name="Leerlingnummer" placeholder="Leerlingnummer" class="form-control" required/>
						</th>
					</tr>
					<tr>
						<th colspan=2>
							<input type="Submit" class="btn-block" style="Color:#016552;" name="VerzendenLeerling" onclick="confirm('Weet u zeker dat u deze leerling wilt verwijderen.;">
						</th>
						</tr>
				</table>
			</form>
		</div>
	</div>
	<!-- /Verwijder een leerling -->
	
	<!-- Verwijder een Klas -->
	<div class="col-sm-6" style="Padding-top: 10%;">
		<div class="text-center">
			<form action="DeleteLeerling.php" method="Post">
				<table border=0>
					<tr>
						<th colspan=2>Verwijder een klas</th>
					</tr>
					<tr>
						<th>
							Klasnaam
						</th>
						<th>
							<input type="text" name="Klasnaam" placeholder="Klassencode" class="form-control" required/>
						</th>
					</tr>
					<tr>
						<th colspan=2>
							<input type="Submit" class="btn-block" style="Color:#016552;" name="VerzendenKlas" onclick="Deleteklas();">
						</th>
					</tr>
				</table>
			</form>
		</div>
	</div>
	<!-- /Verwijder een Klas -->
	
	
  </div>
  
</div>

<?php  

	require('../connect.php');


?>


	<!-- /.container -->
	<!-- script references -->

		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/bootstrap-datepicker.js"></script>
	</body>
</html>