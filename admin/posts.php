<!DOCTYPE html>
<?php
session_start();
require_once("../check.php");
require_once("../groupcheckadmin.php");
?>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Urenboek</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="../css/bootstrap.css" rel="stylesheet">
		<link href="../css/styles.css" rel="stylesheet">
		<link href="css/bootstrap-datepicker.css" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link href="../css/styles.css" rel="stylesheet">
	</head>
	<body>
<?php
include("../Nav.php")
?>

<div class="container">
  
  <div class="text-center">
    <h1>Log je uren van je werk in!</h1>
    <p class="lead">Zorg er voor dat je het eerst saved en dan oproep!</p>
  </div>
  
</div>
<div class="invoegbalk">

<!-- Bootstrap stylesheet -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

<!-- ClockPicker Stylesheet -->
<link rel="stylesheet" type="text/css" href="css/bootstrap-clockpicker.min.css">


<!-- jQuery and Bootstrap scripts -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>




<!-- clock manual
<!-- ClockPicker script 
<script type="text/javascript" src="js/bootstrap-clockpicker.min.js"></script>

<script type="text/javascript">
$('.clockpicker').clockpicker()
    .find('input').change(function(){
        // TODO: time changed
        console.log(this.value);
    });
$('#tijdstart').clockpicker({
    autoclose: true
});

if (something) {
    // Manual operations (after clockpicker is initialized).
    $('#tijdstart').clockpicker('show') // Or hide, remove ...
            .clockpicker('toggleView', 'minutes');
}
</script>
<input id="tijdstop" class="inputbox"  name='tijdstop' class="input" placeholder="Tijd-Stop"/>

<!-- jQuery and Bootstrap scripts 
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>

<!-- ClockPicker script 
<script type="text/javascript" src="js/bootstrap-clockpicker.min.js"></script>

<script type="text/javascript">
$('.clockpicker').clockpicker()
    .find('input').change(function(){
        // TODO: time changed
        console.log(this.value);
    });
$('#tijdstop').clockpicker({
    autoclose: true
});

if (something) {
    // Manual operations (after clockpicker is initialized).
    $('#tijdstop').clockpicker('show') // Or hide, remove ...
            .clockpicker('toggleView', 'minutes');
}
</script>

		<!-- datum input...
		<input class="selectbox" name="datum" type="text" placeholder="Kies Datum"  id="datum" required>



        <script type="text/javascript">
            
            $(document).ready(function () {
                
               $('#datum').datepicker({
                    format: "dd/mm/yyyy"
                });  
            
            });
		</script>		
		-->		

		
<div class="row col-md-8">		
<table>
<form action='adminView.php' method='post' style='float: right; margin-right: 5%;'>
<input type='submit'  class='viewbutton'  name='view' id='view'>
</form>
<form action='filter.php' method='post' style='float: right; margin-right: 5%;'>
<input type='submit'  class='filterbutton' value="Filter" name='view' id='view'>
</form>
</table>
</div>
</div>


	<!-- /.container -->
	<!-- script references -->

		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/bootstrap-datepicker.js"></script>
	</body>
</html>