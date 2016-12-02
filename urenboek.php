<!DOCTYPE html>
<?php
session_start();
require("check.php");
require("groupcheck.php");
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
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link href="css/styles.css" rel="stylesheet">
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
        <li class="active"><a href="urenboek.php">Home</a></li>
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
    <h1>Log hier je uren.</h1>
    <p class="lead">Vergeet niet te saven!</p>
  </div>
  
</div>

<!-- start nav inputs -->
<div class="invoegbalk">

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

<!-- nav inputs automatische clockin -->
<form action = "newinsert.php" method = "get">

<?php
if (empty($_SESSION['TimeStart']) && empty($_SESSION['TimeStop'])){
	echo"
    <button type = 'submit' name = 'submit' value = 'Tijd-in' class='clockbutton'>        
        Clock In
    </button>
	";
}
else if(isset($_SESSION['TimeStart']) && empty($_SESSION['TimeStop'])){
	echo "
    <button type = 'submit' name = 'submit' value = 'Clock-uit' class='clockbutton'>
        Clock-uit
    </button>
	";
}
else if(isset($_SESSION['TimeStart']) && isset($_SESSION['TimeStop']))
	echo "

</form>


<form name='submitdisable'action='insertpost.php' method='post' >
<input type='text' class='selectbox' name='locatie' id='locatie' list='plaatsen'placeholder='Locatie' required>
	<datalist id='plaatsen'>
		<option value='School'> School </option>
		<option value='Thuis'> Thuis </option>
		<option value='Project Meeting'> Project Meeting </option>
		<option value=' '> Ergens Anders: </option>
	</datalist>
</input>



<select class='selectbox' id='vak' name='vak' placeholder='leervak' style='width: 150px; padding: 0px;' required>
	<option value='Programmeren'> Programmeren </option>
	<option value='Webdesign'> Webdesign </option>
	<option value='Security'> Security </option>
	<option value='Engels'> Engels </option>
	<option value='Wiskunde'> Wiskunde </option>
	<option value='Rekenen'> Rekenen </option>
	<option value='Nederlands'> Nederlands </option>

<input id='werkzaamheden' class='inputbox' name='werkzaamheden' placeholder='werkzaamheden' pattern='.{10,200}'  title='40 tot 200 characters' required>
<input type='submit' class='savebutton' name='post' placeholder='Opslaan'> 





			  


";
?>

</form>

<!-- Viewbutton -->
<form action='viewpost.php' method='post' style='float: right; margin-right: 5%;'>
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