<!DOCTYPE html>
<?php
session_start();
require("groupcheck.php");
require('connect.php');
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
        <li class="active"><a href="urenboek.php">Home</a></li>
        <li><a href="logout.php">Logout</a></li>
      </ul>
      <!--<ul class="nav navbar-nav navbar-right">
        <li><a href="#Posts">posts</a></li>
      </ul>--->
    </div>
  </div>
</div>

<div class="container">

  <div class="text-center">
    <h1>Log je uren van je werk in!</h1>
    <p class="lead">Roc Kop van Noordholland, Schagen</p>
  </div>

</div>
<div class="invoegbalk">

<!-- ClockPicker Stylesheet -->
<link rel="stylesheet" type="text/css" href="css/bootstrap-clockpicker.min.css">
	<div class="row">
		<div class="col-md-6" style="padding-top:19%; padding-bottom:19%;">

			<form action="wachtwoord.php" method="post" class="Inlogform">
			<?php
			if(isset($_POST['Inloggen'])){
				$Wachtwoord = hash('sha224', $_POST['Wachtwoord']);
				$WachtwoordB = hash('sha224', $_POST['WachtwoordB']);
				$Leerlingnummer = $_SESSION['Username'];
				if($Wachtwoord != $WachtwoordB){
					echo ("
						<div class='alert alert-danger'>
							<strong>Error</strong> Wachtwoorden komen niet overeen.
						</div>
							");
				}
				else{
						$Database = "urenboek";
						$mysqlQueryGebruikersnaam = "UPDATE `account` SET`Wachtwoord`='$Wachtwoord',`FirstLogin`= 1 WHERE `Leerlingnummer` = '$Leerlingnummer';";

						//Verbinding met database
						mysql_connect($Server, $Username, $Password) or die("
							<div class='alert alert-danger'>
								<strong>Error</strong> Kon geen verbinding maken met database.
							</div>
						");
						mysql_select_db($Database) or die ("
							<div class='alert alert-danger'>
								<strong>Error</strong> Kan database niet in gegevens vinden.
							</div>
						");
						$query1 = mysql_query($mysqlQueryGebruikersnaam) or die ("
							<div class='alert alert-danger'>
								<strong>Error</strong> Fout in SQL-code, Neem contact met de beheerder.
							</div>
							");
						header("Location: urenboek.php");
				}
			}
			?>
				<fieldset>
					<table border=0 width="100%">
						<tbody>
							<tr colspan=2>
								<a class="alert alert-danger">Wachtwoord moet veranderd worden:<a><br>
							</tr>
							<br>
							<tr>
								<td>
									<input type="text" placeholder="Wachtwoord" name="Wachtwoord" class="loginbox" required/>
								</td>
								<td>
									<input type="password" placeholder="Bevestig wachtwoord" name="WachtwoordB" class="loginbox" required/>
								</td>
							</tr>
							<tr>
							<tr>
						</tbody>
						<tfoot>
							<td colspan=2>

									<input type="Submit" value="veranderen" class="Inlogbutton" name="Inloggen">

							</td>
						</tfoot>
					</table>
				</fieldset>
			</form>
		</div>

		<div class="col-md-6">
			<img src="img/selfie.png" width="100%" height="100%">
		</div>
	</div>
</div>


	<!-- /.container -->
	<!-- script references -->

		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/bootstrap-datepicker.js"></script>
	</body>
</html>
