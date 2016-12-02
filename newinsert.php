<?php
	session_start();
	//include('index.php');
	$server = "localhost";
	$user = "root";
	$password = "usbw";
	$db = "urenboek";
	date_default_timezone_set('Europe/Amsterdam');
	$conn = mysql_connect($server, $user, $password) or die("Geen verbinding mogelijk met database");
	mysql_select_db($db) or die("Database niet gevonden");
	
	if (empty($_SESSION['TimeStart']) && empty($_SESSION['TimeStop'])){
	$_SESSION['TimeStart'] = date("h:i:s");
	//echo $_SESSION['TimeStart'];
	header("Location: urenboek.php");
	}
	else if(isset($_SESSION['TimeStart']) && empty($_SESSION['TimeStop'])){
		$_SESSION['TimeStop'] = date("h:i:s");
		header("Location: urenboek.php");
	}
	else if(isset($_SESSION['TimeStart']) && isset($_SESSION['TimeStop'])){
		
		
		
		unset($_SESSION['TimeStart']);
		unset($_SESSION['TimeStop']);
		
	}
	else{
		echo "Mislukt";
	
	}
?>