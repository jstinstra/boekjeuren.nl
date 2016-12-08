<?php
	error_reporting(0);
	session_start();
	require('connect.php');



	if($_POST['view']){	
	include("todo.php");
	mysql_select_db("urenboek");
    $SQL = "SELECT `ToDoID`, `vak`, `User`, `Nodig`, `WieNodig`, `Tijd`, `prior`, `Datum`, `Check` FROM todo WHERE User ='$Leerlingnummer'" or die("yu fckd up");
	$result = $conn->query($SQL);

	
	if ($result->num_rows > 0) {
		
		echo "<div class='viewtable'>";
		echo "<table class='table table-striped table-bordered table-hover table-condensed'>";
		echo "<thead class='thead-inverse'>";
			 echo ("<tr>");
			 echo ("<th> vak:</th>");
			 echo ("<th> Nodig:</th>");
			 echo ("<th> WieNodig:</th>");
			 echo ("<th> Tijd:</th>");
			 echo ("<th> prior:</th>");
			 echo ("<th> Datum:</th>");
			 echo ("<th> Gedaan?</th>");
			 echo ("</tr>");	
		echo "</thead>";
		
		 while($row = $result->fetch_assoc()) {
			 
			echo ("<tr>");
				echo ("<th>". $row["vak"]. "</th>");
				echo ("<th>". $row["Nodig"]. "</th>");
				echo ("<th>". $row["WieNodig"]. "</th>");
				echo ("<th>". $row["Tijd"]. "</th>");
				echo ("<th>". $row["prior"]. "</th>");
				echo ("<th>". $row["Datum"]. "</th>");
				if ($row['Check']  == 1){
						$checkimg = "img/check.png";
					} elseif ($row['Check']  == 2) {
						$checkimg = "img/uncheck.png";
					} elseif ($row['Check']  == 0) {
						$checkimg = "img/emptycheck.png";
					}
					//echo ("<th>". $checkimg. "</th>");
				echo ("<td><form action= 'checkToDo.php' name='check' method='POST'><input type='image' alt='submit' name='check' src='" .$checkimg."' style='width: 25px; height: 25px;'></a> </td>");
				$id  = $row['ToDoID'];	
				echo  "<input type='hidden' name='ToDoID' value='$id'>";				
				echo ("</td>");
				echo ("</form>");
		 }


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

?>