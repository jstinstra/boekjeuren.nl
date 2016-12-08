<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
$q = intval($_GET['q']);

$con = mysqli_connect('localhost','root','usbw','urenboek');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"ajax_demo");
$result = mysqli_query($con,$sql);
			$Leerlingnummer = $_POST['Leerlingnummer'];
			$Klassen = $_POST['Klassen'];
				$Vakken = $_POST['Vakken'];
				$sql2 = "SELECT `PostID`, `Leerlingnummer`, `Klas`, `Voornaam`, `Tussenvoegsel`, `Achternaam`, `Vak`, `Tijd-in`, `Tijd-uit`, `Locatie`,`Datum`, `Werkzaamheden` , `Opmerking` FROM account INNER JOIN posts ON account.Leerlingnummer = posts.User WHERE Vak LIKE '$Vakken' AND Leerlingnummer LIKE '$Leerlingnummer' AND Klas LIKE '$Klassen' ".$q."	;";
				$result = mysql_query($sql2) or die ($sql2);

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
							echo ("<th> Opmerking:</th>");
						echo ("</tr>");
					echo "</thead>";

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
								<td>
									".$row['Opmerking']."
								</td>");
								echo ("<td>");
								$id  = $row['PostID'];
								echo ("<form action= 'opmerking.php' method='POST'> <input 	type='text' name='opmerking'>");
								echo  "<input type='hidden' name='PostID' value='$id'>";
								echo ("<input type='submit' value='+' name='post'></form>");
								echo ("</td>");



					}

echo "</table>";
mysqli_close($con);
?>
</body>
</html>
