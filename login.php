<?php

require('connect.php');

$Leerlingnummer = $_POST['Leerlingnummmer'];
$Encrypt = hash('sha224', $_POST['Wachtwoord']);


$query = "SELECT * FROM account WHERE Leerlingnummer='$Leerlingnummer' AND Wachtwoord='$Encrypt'";
$query_1 = "SELECT * FROM account WHERE Leerlingnummer='$Leerlingnummer' AND Wachtwoord='ABC'";

$PHP = mysqli_query($conn, $query);
$PHP2 = mysqli_query($conn, $query_1);
$Telquery = mysqli_num_rows($PHP);
$Telquery3 = mysqli_num_rows($PHP2);
if($Telquery == 0){
 include("index.html");
 Echo "<div class='alert alert-danger'>Wachtwoord of gebruikersnaam onjuist</div>"; 
 
}
else if($Telquery == 1){
	
 session_start();
 $_SESSION['Username'] = $Leerlingnummer;
 //$ADMINQuery = mysql_query("SELECT * FROM account WHERE Leerlingnummer='$Leerlingnummer' AND Wachtwoord='$Encrypt'")
 //header("Location: Tabel.php");
 $sql = mysql_query("SELECT * FROM account WHERE Leerlingnummer='$Leerlingnummer' AND Wachtwoord='ABC' AND FirstLogin= 0");
 $Telquery2 = mysql_num_rows($sql);
 if($Telquery2 == 1){
  header("Location: wachtwoord.php");
 }else{
  header("Location: urenboek.php");
 }
}
else{
 echo "Uw account en wachtwoord komt 2 of meerdere keren voor in de Database. Neem contact op met uw beheerder";
}
if($Telquery3 == 0){
}
else if($Telquery3 == 1){
	
 session_start();
 $_SESSION['Username'] = $Leerlingnummer;
 //$ADMINQuery = mysql_query("SELECT * FROM account WHERE Leerlingnummer='$Leerlingnummer' AND Wachtwoord='$Encrypt'")
 //header("Location: Tabel.php");
 $sql = mysql_query("SELECT * FROM account WHERE Leerlingnummer='$Leerlingnummer' AND Wachtwoord='ABC' AND FirstLogin= 0");
 $Telquery4 = mysql_num_rows($sql);
 if($Telquery4 == 1){
  header("Location: wachtwoord.php");
 }else{
  header("Location: urenboek.php");
 }
}
else{
 echo "Uw account en wachtwoord komt 2 of meerdere keren voor in de Database. Neem contact op met uw beheerder";
}
?>