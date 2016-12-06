<?php

require('connect.php');

if (isset($_SESSION['Username']) && $_SESSION['Username'] == true) {
$Leerlingnummer = $_SESSION['Username'];

$query ="SELECT * FROM account WHERE Leerlingnummer='$Leerlingnummer' AND GroupID= 0";
$query1 ="SELECT * FROM account WHERE Leerlingnummer='$Leerlingnummer' AND GroupID= 1";
$query2 ="SELECT * FROM account WHERE Leerlingnummer='$Leerlingnummer' AND GroupID= 2";
$query3 ="SELECT * FROM account WHERE Leerlingnummer='$Leerlingnummer' AND GroupID= 3";


$group = mysqli_query($conn, $query) or die ("Fout met zoeken");
$group1 = mysqli_query($conn, $query1) or die ("Fout met zoeken");
$group2 = mysqli_query($conn, $query2) or die ("Fout met zoeken");
$group3 = mysqli_query($conn, $query3) or die ("Fout met zoeken");
$Groupquery = mysqli_num_rows($group);
$Groupquery1 = mysqli_num_rows($group1);
$Groupquery2 = mysqli_num_rows($group2);
$Groupquery3 = mysqli_num_rows($group3);

if($Groupquery == 1){
 $_SESSION['Username'] = $Leerlingnummer;
 $query4 = "SELECT * FROM account WHERE Leerlingnummer='$Leerlingnummer' AND GroupID= 0";
 $sql = mysqli_query($conn, $query4);
 $Groupresult = mysqli_num_rows($sql);


 if($Groupresult == 1){
  header(" ");
 }
 else{
  header("Location: onbevoegd.php");
 }
}

if($Groupquery1 == 1){
 $_SESSION['Username'] = $Leerlingnummer;
 $query5 = "SELECT * FROM account WHERE Leerlingnummer='$Leerlingnummer' AND GroupID= 1";
 $sql1 = mysqli_query($conn, $query5);
 $Groupresult1 = mysqli_num_rows($sql1);


 if($Groupresult1 == 1){
  header("Location: urenboekadmin.php");
 }
 else{
  header("Location: onbevoegd.php");
 }
}

if($Groupquery2 == 1){
 $_SESSION['Username'] = $Leerlingnummer;
 $query6 = "SELECT * FROM account WHERE Leerlingnummer='$Leerlingnummer' AND GroupID= 2";
 $sql2 = mysqli_query($conn, $query6);
 $Groupresult2 = mysqli_num_rows($sql2);


 if($Groupresult2 == 1){
  header("Location: Editor.php");
 }
 else{
  header("Location: onbevoegd.php");
 }
}

if($Groupquery3 == 1){
 $_SESSION['Username'] = $Leerlingnummer;
 $query7 = "SELECT * FROM account WHERE Leerlingnummer='$Leerlingnummer' AND GroupID= 3";
 $sql3 = mysqli_query($conn, $query7);
 $Groupresult3 = mysqli_num_rows($sql3);


 if($Groupresult3 == 1){
  header("Location: Admin.php");
 }
 else{
  header("Location: onbevoegd.php");
 }
}

}

else{
	header("Location: index.html");
}

?>
