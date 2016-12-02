<!DOCTYPE html>
<?php
error_reporting(0);
session_start();
require_once("check.php");
require_once("groupcheckadmin.php");
?>
<!--<div class="printlogo" id="printlogo" style="	visibility: hidden;"><img src="img/selfie.png"></div>-->
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
<?php
include("Nav.php")
?>

<div class="container">
  
  <div class="text-center">
    <h1>Log hier je uren.</h1>
    <p class="lead">Vergeet niet te saven!</p>
  </div>
  
</div>

<div class="filterbalk">
	<form action="urenboekadmin.php" method="Post">
		<select class='selectbox' name="Klassen">
			<option value="%"> </option>
		<?php
			$Server = "localhost";
			$Username = "root";
			$Password = "usbw";
			$Database = "urenboek";
			$sql = "SELECT DISTINCT Klas FROM account;";
			
			//Verbinden met database
			mysql_connect($Server, $Username, $Password);
			mysql_select_db($Database);
			$Resultaat = mysql_query($sql) or die ("Mislukt");
			while ($row = mysql_fetch_assoc($Resultaat)) {
				echo ("
				<option value='".$row["Klas"]."'>".$row["Klas"]."</option>
				
				");
							
			}
		?>
			
		</select>
		<select class='selectbox' name="Leerlingnummer">
			<option value="%"> </option>
		<?php
			$Server = "localhost";
			$Username = "root";
			$Password = "usbw";
			$Database = "urenboek";
			$sql = "SELECT DISTINCT Leerlingnummer FROM account;";
			
			//Verbinden met database
			mysql_connect($Server, $Username, $Password);
			mysql_select_db($Database);
			$Resultaat = mysql_query($sql) or die ("Mislukt");
			while ($row = mysql_fetch_assoc($Resultaat)) {
				echo ("
				<option value='".$row["Leerlingnummer"]."'>".$row["Leerlingnummer"]."</option>
				
				");
							
			}
		?>
		</select>
		<select class='selectbox' Name="Vakken">
			<option value="%"> </option>
			<?php
				$Server = "localhost";
				$Username = "root";
				$Password = "usbw";
				$Database = "urenboek";
				$sql = "SELECT DISTINCT Vak FROM vakken ORDER BY Vak;";
				
				//Verbinden met database
				mysql_connect($Server, $Username, $Password);
				mysql_select_db($Database);
				$Resultaat = mysql_query($sql) or die ("Mislukt");
				while ($row = mysql_fetch_assoc($Resultaat)) {
					echo ("
					<option value='".$row["Vak"]."'>".$row["Vak"]."</option>
					
					");
								
				}
			?>
		</select>
		<input type="submit" class='filterbutton' value="Filter" name="Filter">
	</form>
</div>

<div class="invoegbalk">

<!-- ClockPicker Stylesheet -->
<link rel="stylesheet" type="text/css" href="css/bootstrap-clockpicker.min.css">


<!-- jQuery and Bootstrap scripts -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>




<!-- clock manual
<!-- ClockPicker script 
<script type="text/javascript" src="js/bootstrap-clockpicker.min.js"></script>

<script type="text/javascript">
$('.clockpicker').clockpicker()
    .find('input').change(function(){
        // TODO: time changed
        console.log(this.value);
    });
$('#tijdstart').clockpicker({
    autoclose: true
});

if (something) {
    // Manual operations (after clockpicker is initialized).
    $('#tijdstart').clockpicker('show') // Or hide, remove ...
            .clockpicker('toggleView', 'minutes');
}
</script>
<input id="tijdstop" class="inputbox"  name='tijdstop' class="input" placeholder="Tijd-Stop"/>

<!-- jQuery and Bootstrap scripts 
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>

<!-- ClockPicker script 
<script type="text/javascript" src="js/bootstrap-clockpicker.min.js"></script>

<script type="text/javascript">
$('.clockpicker').clockpicker()
    .find('input').change(function(){
        // TODO: time changed
        console.log(this.value);
    });
$('#tijdstop').clockpicker({
    autoclose: true
});

if (something) {
    // Manual operations (after clockpicker is initialized).
    $('#tijdstop').clockpicker('show') // Or hide, remove ...
            .clockpicker('toggleView', 'minutes');
}
</script>

		<!-- datum input...
		<input class="selectbox" name="datum" type="text" placeholder="Kies Datum"  id="datum" required>



        <script type="text/javascript">
            
            $(document).ready(function () {
                
               $('#datum').datepicker({
                    format: "dd/mm/yyyy"
                });  
            
            });
		</script>		
		-->		

		
<div class="row col-md-8">		
<table>
<form action = "newinsert.php" method = "get">

<?php
if (empty($_SESSION['TimeStart']) && empty($_SESSION['TimeStop'])){
	echo"
    <button type = 'submit' name = 'submit' value = 'Tijd-in' class='clockbutton'>        
        Clock In
    </button>
	";
}
else if(isset($_SESSION['TimeStart']) && empty($_SESSION['TimeStop'])){
	echo "
    <button type = 'submit' name = 'submit' value = 'Clock-uit' class='clockbutton'>
        Clock-uit
    </button>
	";
}
else if(isset($_SESSION['TimeStart']) && isset($_SESSION['TimeStop']))
	echo "

</form>


<form name='submitdisable'action='insertpost.php' method='post' >
<input type='text' class='selectbox' name='locatie' id='locatie' list='plaatsen'placeholder='Locatie' required>
	<datalist id='plaatsen'>
		<option value='School'> School </option>
		<option value='Thuis'> Thuis </option>
		<option value='Project Meeting'> Project Meeting </option>
		<option value=' '> Ergens Anders: </option>
	</datalist>
</input>



<select class='selectbox' id='vak' name='vak' placeholder='leervak' style='width: 150px; padding: 0px;' required>
	<option value='Programmeren'> Programmeren </option>
	<option value='Webdesign'> Webdesign </option>
	<option value='Security'> Security </option>
	<option value='Engels'> Engels </option>
	<option value='Wiskunde'> Wiskunde </option>
	<option value='Rekenen'> Rekenen </option>
	<option value='Nederlands'> Nederlands </option>

<input id='werkzaamheden' class='inputbox' name='werkzaamheden' placeholder='werkzaamheden' pattern='.{10,200}'  title='40 tot 200 characters' required>
<input type='submit' class='savebutton' name='post' placeholder='Opslaan'> 





			  


";
?>

</form>


<form action='viewpostadmin.php' method='post' style='float: right; margin-right: 5%;'>
<input type='submit'  class='viewbutton'  name='view' id='view'>
</form>
</table>
</div>
</div>
<div class="viewtable" id="viewtable">
	<?php
	
		if(isset($_POST['Filter']))
		{	
			$Leerlingnummer = $_POST['Leerlingnummer'];
			$Klassen = $_POST['Klassen'];
				$Vakken = $_POST['Vakken'];
				$Server = "localhost";
				$Username = "root";
				$Password = "usbw";
				$Database = "urenboek";
				$sql2 = "SELECT `PostID`, `Leerlingnummer`, `Klas`, `Voornaam`, `Tussenvoegsel`, `Achternaam`, `Vak`, `Tijd-in`, `Tijd-uit`, `Locatie`,`Datum`, `Werkzaamheden` ,`Check`, `Opmerking` FROM account INNER JOIN posts ON account.Leerlingnummer = posts.User WHERE Vak LIKE '$Vakken' AND Leerlingnummer LIKE '$Leerlingnummer' AND Klas LIKE '$Klassen';";
				mysql_connect($Server, $Username, $Password);
				mysql_select_db($Database);
				$Resultaat = mysql_query($sql2) or die ($sql2);
					
					echo "<div class='viewtable'>";
					echo "<table class='table table-striped table-bordered table-hover table-condensed'>";
					echo "<thead class='thead-inverse'>";
						echo ("<tr>");
							//echo ("<th> PostID:</th>");
							echo ("<th> Leerlingnummer:</th>");
							echo ("<th> Klas:</th>");
							echo ("<th> Voornaam:</th>");
							echo ("<th> Tussenvoegsel:</th>");
							echo ("<th> Achternaam:</th>");
							echo ("<th> Vak:</th>");
							echo ("<th> Tijd-start:</th>");
							echo ("<th> Tijd-uit</th>");
							echo ("<th> Locatie:</th>");
							echo ("<th> Datum:</th>");
							echo ("<th> Werkzaamheden:</th>");
							echo ("<th> <img src='img/uncheck.png' style='width: 25px; height: 25px;'> <img src='img/check.png' style='width: 25px; height: 25px;'> </th>");
							echo ("<th> Opmerking:</th>");
							echo ("<th><button type='button' class='btn btn-default' onclick='window.print()'><img src='img/glyphicon glyphicon-print.png' style='width: 20px; height: 20px;'></button>");
						echo ("</tr>");	
					echo "</thead>";
						
					}
			while ($row = mysql_fetch_assoc($Resultaat)) {
						echo ("
							<tr>
								<td>
									".$row['Leerlingnummer']."
								</td>
								<td>
									".$row['Klas']."
								</td>
								<td>
									".$row['Voornaam']."
								</td>
								<td>
									".$row['Tussenvoegsel']."
								</td>
								<td>
									".$row['Achternaam']."
								</td>
								<td>
									".$row['Vak']."
								</td>
								<td>
									".$row['Tijd-in']."
								</td>
								<td>
									".$row['Tijd-uit']."
								</td>
								<td>
									".$row['Locatie']."
								</td>
								<td>
									".$row['Datum']."
								</td>
								<td>
									".$row['Werkzaamheden']."
								</td>
								");
								
								if ($row['Check']  == 1){
										$checkimg = "img/check.png";
									} elseif ($row['Check']  == 2) {
										$checkimg = "img/uncheck.png";
									} elseif ($row['Check']  == 0) {
										$checkimg = "img/emptycheck.png";
									}
									//echo ("<th>". $checkimg. "</th>");
									echo ("<td><form action= 'checkbox.php' name='check' method='POST'><input type='image' alt='submit' name='check' src='".$checkimg."' style='width: 25px; height: 25px;'></a> </td>");
													
								echo "
								<td>
									".$row['Opmerking']."
								</td>";
								echo ("<td>");
								$id  = $row['PostID'];
								echo ("<form action= 'Opmerking.php' method='POST'> <input 	type='text' name='opmerking'>");	
								echo  "<input type='hidden' name='PostID' value='$id'>";				
								echo ("<input type='submit' value='+' name='post'></form>");
								echo ("</td>");


						
					}
			
			echo "</table>";
		 echo "</div>";
 
		 
			
		
	?>
</div>



	<!-- /.container -->
	<!-- script references -->

		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/bootstrap-datepicker.js"></script>
	</body>
</html>