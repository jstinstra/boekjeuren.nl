<?php
require_once("/session.php");

if (isset($_SESSION['Username']) && $_SESSION['Username'] != "") {
 $Leerlingnummer = $_SESSION['Username'];

 require_once('connect.php');

 $query = "SELECT * FROM account WHERE Leerlingnummer='$Leerlingnummer' AND FirstLogin= 0";
 $PHP = mysqli_query($conn, $query);
 $Telquery = mysqli_num_rows($PHP);

 if($Telquery == 1){
    header("Location: password.php");
 }
}
?>