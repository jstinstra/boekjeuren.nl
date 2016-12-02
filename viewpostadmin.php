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
	include('urenboekadmin.php');	
	mysql_select_db("urenboek");
    $SQL = "SELECT * FROM posts " or die("yu fckd up");
	$result = $conn->query($SQL);

	
	if ($result->num_rows > 0) {
		
		echo "<div class='viewtable' id='viewtable'>";
		echo "<table class='table table-striped table-bordered table-hover table-condensed'>";
		echo "<thead class='thead-inverse'>";
			 echo ("<tr>");
			 echo ("<th> Student:</th>");
			 echo ("<th> Tijd-start:</th>");
			 echo ("<th> Tijd-uit</th>");
			 echo ("<th> Datum:</th>");
			 echo ("<th> Locatie:</th>");
			 echo ("<th> Vak:</th>");
			 echo ("<th> Werkzaamheden:</th>");
			 echo ("<th> <img src='img/uncheck.png' style='width: 25px; height: 25px;'> <img src='img/check.png' style='width: 25px; height: 25px;'> </th>");
			 echo ("<th> Opmerkingen:</th>");
			 echo ("</tr>");	
		echo "</thead>";
		
		 while($row = $result->fetch_assoc()) {
			 
			echo ("<tr>");
				echo ("<th>". $row["User"]. "</th>");
				echo ("<th>". $row["Tijd-in"]. "</th>");
				echo ("<th>". $row["Tijd-uit"]. "</th>");
				echo ("<th>". $row["Datum"]. "</th>");
				echo ("<th>". $row["Locatie"]. "</th>");
				echo ("<th>". $row["Vak"]. "</th>");
				echo ("<th>". $row["Werkzaamheden"]. "</th>");				
				$id  = $row['PostID'];	
				if ($row['Check']  == 1){
					$checkimg = "img/check.png";
				} elseif ($row['Check']  == 2) {
					$checkimg = "img/uncheck.png";
				} elseif ($row['Check']  == 0) {
					$checkimg = "img/emptycheck.png";
				}
				//echo ("<th>". $checkimg. "</th>");
				echo ("<th><form action= 'checkbox.php' name='check' method='POST'><input type='image' alt='submit' name='check' src='".$checkimg."' style='width: 25px; height: 25px;'></a> </th>");
				echo  "<input type='hidden' name='PostID' value='$id'>";				
			
				echo ("<th></form>");
				echo ("<form action= 'Opmerking.php' method='POST'> <input 	type='text' name='opmerking'>");	
				echo  "<input type='hidden' name='PostID' value='$id'>";				
				echo ("<input type='submit' value='+' name='post'></form></th>");
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