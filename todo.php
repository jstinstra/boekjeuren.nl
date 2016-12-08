<!DOCTYPE html>
<?php
session_start();
require("check.php");
require("groupcheckadmin.php");
?>
<html lang="en">
		<!-- Autheurs rechten/charsets -->
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Urenboek</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="css/bootstrap.css" rel="stylesheet">
		<link href="css/styles.css" rel="stylesheet">
		<link href="css/bootstrap-datepicker.css" rel="stylesheet">
		<script src="js/bootstrap-slider.js"></script>

		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link href="css/styles.css" rel="stylesheet">
		<link href="css/bootstrap-slider.css" rel="stylesheet">
	</head>
	<body>
	
	

	
	<!-- Navigatiebalk/header -->
<div class="navbar navbar-default navbar-static-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Logboek</a>
    </div>
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li><a href="urenboek.php">Home</a></li>
        <li class="active"><a href="todo.php">To Do</a></li>
        <li><a href="logout.php">Logout</a></li>
      </ul>
      <!--<ul class="nav navbar-nav navbar-right">
        <li><a href="#Posts">posts</a></li>
      </ul>--->
    </div>
  </div>
</div>

<!-- Title urenboek -->
<div class="container">
  <div class="text-center">
    <h1>To Do!</h1>
    <p class="lead">Wat moet je nog doen?</p>
  </div>
  
</div>

<!-- start nav inputs -->
<div class="invoegbalk" style="padding-left: 20%; padding-right: 0px;">

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

--->

		
<div class="row col-md-8">		
<table>

<!-- nav inputs automatische clockin -->

<form action='insertToDo.php' method='post' >

<select class='selectbox' id='vak' name='vak' placeholder='leervak' style='width: 150px; padding: 0px;' required>
	<option value='Programmeren'> Programmeren </option>
	<option value='Webdesign'> Webdesign </option>
	<option value='Security'> Security </option>
	<option value='Engels'> Engels </option>
	<option value='Wiskunde'> Wiskunde </option>
	<option value='Rekenen'> Rekenen </option>
	<option value='Nederlands'> Nederlands </option>
	
<input id='Nodig' class='inputbox' name='Nodig' placeholder='Nodig' pattern='.{10,200}'  title='10 tot 200 characters' required>
<input id='WieNodig' class='inputbox' name='WieNodig' placeholder='WieNodig' pattern='.{5,200}'  title='5 tot 200 characters' required>
<input id='Tijd' class='inputbox' name='Tijd' placeholder='Tijd' pattern='.{10,200}'  title='10 tot 200 characters' required>
	

<input id="ex8" data-slider-id='ex1Slider' name="prior" type="text" data-slider-min="1" data-slider-max="5" data-slider-step="1" data-slider-value="1" style="width: 100px !important;"/>

<script type="text/javascript">
var slider = new Slider("#ex8", {
	tooltip: 'always'
});


</script>

		<input class="selectbox" name="datum" type="text" placeholder="Kies Datum"  id="datum" required>



        <script type="text/javascript">
            
            $(document).ready(function () {
                
               $('#datum').datepicker({
                    format: "dd/mm/yyyy"
                });  
            
            });
		</script>	
</input>
<input type='submit' class='savebutton' name='post' placeholder='Opslaan'> 
	

</form>

<!-- Viewbutton -->
<form action='viewToDo.php' method='post' style='float: right; margin-right: 5%;'>
<input type='submit'  class='viewbutton'  name='view' id='view'>
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