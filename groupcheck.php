<?php

require('connect.php');

if (isset($_SESSION['Username']) && $_SESSION['Username'] == true) {
$Leerlingnummer = $_SESSION['Username'];

$group = mysql_query("SELECT * FROM account WHERE Leerlingnummer='$Leerlingnummer' AND GroupID= 0") or die ("Fout met zoeken");
$group1 = mysql_query("SELECT * FROM account WHERE Leerlingnummer='$Leerlingnummer' AND GroupID= 1") or die ("Fout met zoeken");
$group2 = mysql_query("SELECT * FROM account WHERE Leerlingnummer='$Leerlingnummer' AND GroupID= 2") or die ("Fout met zoeken");
$group3 = mysql_query("SELECT * FROM account WHERE Leerlingnummer='$Leerlingnummer' AND GroupID= 3") or die ("Fout met zoeken");
$Groupquery = mysql_num_rows($group);
$Groupquery1 = mysql_num_rows($group1);
$Groupquery2 = mysql_num_rows($group2);
$Groupquery3 = mysql_num_rows($group3);

if($Groupquery == 1){
 $_SESSION['Username'] = $Leerlingnummer;
 $sql = mysql_query("SELECT * FROM account WHERE Leerlingnummer='$Leerlingnummer' AND GroupID= 0");
 $Groupresult = mysql_num_rows($sql);


 if($Groupresult == 1){
  header(" ");
 }
 else{
  header("Location: onbevoegd.php");
 }
}

if($Groupquery1 == 1){
 $_SESSION['Username'] = $Leerlingnummer;
 $sql1 = mysql_query("SELECT * FROM account WHERE Leerlingnummer='$Leerlingnummer' AND GroupID= 1");
 $Groupresult1 = mysql_num_rows($sql1);


 if($Groupresult1 == 1){
  header("Location: urenboekadmin.php");
 }
 else{
  header("Location: onbevoegd.php");
 }
}

if($Groupquery2 == 1){
 $_SESSION['Username'] = $Leerlingnummer;
 $sql2 = mysql_query("SELECT * FROM account WHERE Leerlingnummer='$Leerlingnummer' AND GroupID= 2");
 $Groupresult2 = mysql_num_rows($sql2);


 if($Groupresult2 == 1){
  header("Location: Editor.php");
 }
 else{
  header("Location: onbevoegd.php");
 }
}

if($Groupquery3 == 1){
 $_SESSION['Username'] = $Leerlingnummer;
 $sql3 = mysql_query("SELECT * FROM account WHERE Leerlingnummer='$Leerlingnummer' AND GroupID= 3");
 $Groupresult3 = mysql_num_rows($sql3);


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
