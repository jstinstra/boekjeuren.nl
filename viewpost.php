<?php
	error_reporting(0);
	$server = "localhost";
	$user = "root";
	$password = "usbw";
	$db = "urenboek";
	$Leerlingnummer = $_SESSION['Username'];

	$conn = new mysqli($server, $user, $password, $db);


	if ($conn -> connect_error) {
		die("Verkeerde dingen wss" . $conn->connect_error);
	}



	if($_POST['view']){	
	include('urenboek.php');	
	mysql_select_db("urenboek");
    $SQL = "SELECT `Tijd-in`, `Tijd-uit`, `Datum`, `Locatie`, `Vak`, `Werkzaamheden` , `Opmerking` FROM posts WHERE User ='$Leerlingnummer'" or die("yu fckd up");
	$result = $conn->query($SQL);

	
	if ($result->num_rows > 0) {
		
		echo "<div class='viewtable'>";
		echo "<table class='table table-striped table-bordered table-hover table-condensed'>";
		echo "<thead class='thead-inverse'>";
			 echo ("<tr>");
			 echo ("<th> Tijd-start:</th>");
			 echo ("<th> Tijd-uit</th>");
			 echo ("<th> Datum:</th>");
			 echo ("<th> Locatie:</th>");
			 echo ("<th> Vak:</th>");
			 echo ("<th> Werkzaamheden:</th>");
			 echo ("<th> Opmerkingen:</th>");
			 echo ("</tr>");	
		echo "</thead>";
		
		 while($row = $result->fetch_assoc()) {
			 
			echo ("<tr>");
				echo ("<th>". $row["Tijd-in"]. "</th>");
				echo ("<th>". $row["Tijd-uit"]. "</th>");
				echo ("<th>". $row["Datum"]. "</th>");
				echo ("<th>". $row["Locatie"]. "</th>");
				echo ("<th>". $row["Vak"]. "</th>");
				echo ("<th>". $row["Werkzaamheden"]. "</th>");
				echo ("<th>". $row["Opmerking"]. "</th>");
			echo ("</tr>");	
			 
			 
		 }

		 echo "</table>";
		 echo "</div>";
	} else {
		 echo "<div class='flikker'>";
		 echo "<b> Je hebt niks gedaan </b>";
		 echo "</div>";
	}
	$conn->close();
}
?>