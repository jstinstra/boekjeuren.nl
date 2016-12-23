<?php
require_once("/session.php");

if (isset($_SESSION['Username']) && $_SESSION['Username'] != "") {
    $Leerlingnummer = $_SESSION['Username'];

    require_once('connect.php');
    $result = mysqli_query($conn, "SELECT * FROM account WHERE Leerlingnummer='$Leerlingnummer'") or die ("Fout met zoeken");
    $amount = mysqli_num_rows($result);

    $row = $result->fetch_assoc();

    if ($row["GroupID"] != "3") {  // if GroupID is not equal to 3 than go to index.html
        header("Location: /index.html");
    }
}
?>