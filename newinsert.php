<?php
	session_start();
	//include('index.php');
	require('connect.php');
	date_default_timezone_set('Europe/Amsterdam');

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
