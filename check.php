<?php
if (isset($_SESSION['Username']) && $_SESSION['Username'] == true) {
$Leerlingnummer = $_SESSION['Username'];

$server = "localhost";
$user = "root";
$pass = "usbw";

mysql_connect($server, $user, $pass) or die("Geen verbinding mogelijk met database");
mysql_select_db("urenboek") or die("Databank niet gevonden");

$PHP = mysql_query("SELECT * FROM account WHERE Leerlingnummer='$Leerlingnummer' AND FirstLogin= 0;");
$Telquery = mysql_num_rows($PHP);

if($Telquery == 1){
 session_start();
 $_SESSION['Username'] = $Leerlingnummer;
 //$ADMINQuery = mysql_query("SELECT * FROM account WHERE Leerlingnummer='$Leerlingnummer' AND Wachtwoord='$Encrypt'")
 //header("Location: Tabel.php");
 $sql = mysql_query("SELECT * FROM account WHERE Leerlingnummer='$Leerlingnummer' AND FirstLogin= 0");
 $Telquery2 = mysql_num_rows($sql) or die ("JE VIND ME NOOIT!");
 if($Telquery2 == 1){
  header("Location: wachtwoord.php");
 }else{
  header("Location: Tabel.php");
 }
}




}

?>