<?php
if (isset($_SESSION['Username']) && $_SESSION['Username'] == true) {
$Leerlingnummer = $_SESSION['Username'];

require('connect.php');

$query = "SELECT * FROM account WHERE Leerlingnummer='$Leerlingnummer' AND FirstLogin= 0";
$PHP = mysqli_query($conn, $query);
$Telquery = mysqli_num_rows($PHP);

if($Telquery == 1){
 session_start();
 $_SESSION['Username'] = $Leerlingnummer;
 //$ADMINQuery = mysql_query("SELECT * FROM account WHERE Leerlingnummer='$Leerlingnummer' AND Wachtwoord='$Encrypt'")
 //header("Location: Tabel.php");
 $query1 = "SELECT * FROM account WHERE Leerlingnummer='$Leerlingnummer' AND FirstLogin= 0";
 $sql = mysqli_query($conn, $query1);
 $Telquery2 = mysqli_num_rows($sql) or die ("JE VIND ME NOOIT!");
 if($Telquery2 == 1){
  header("Location: wachtwoord.php");
 }else{
  header("Location: Tabel.php");
 }
}




}

?>
