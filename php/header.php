<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>College Football Central</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    
     <script type="text/javascript" src="../js/custom.js"> </script>


     <script type=\"text/javascript\">
     	function logBtnPressed()
     	{
     		alert("You have successfully logged out");
     	}//function
     </script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <?php 
    	include("common.php"); //include this file so every page can access the DB
    ?>



    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
	<!-- Chart.js for graphics -->
	<script src="js/Chart.js"></script>
	<!-- Jquery -->
	<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>

	<!-- Script plugin-->
	<script src="js/doughnutit.js"></script>

	<!-- Styles -->
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta name = "viewport" content = "initial-scale = 1, user-scalable = no">



  </head>
  <body>
    <!-- NAVBAR -->
	<nav class="navbar navbar-light">
	  <div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="index.php">College Football Central</a>
	    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav">
	      	<!-- SEC -->
	        <li class="active"><a href="SEC.php">SEC <span class="sr-only">(current)</span></a></li>
	       	<!-- ACC -->
	        <li><a href="ACC.php">ACC</a></li>
	        <!-- B1G -->
	        <li><a href="B1G.php">B1G</a></li>
	        <!-- BIGXII -->
	        <li><a href="XII.php">XII</a></li>
	        <!-- PAC12 -->
	        <li><a href="PAC.php">PAC-12</a></li>
	      </ul>
	      <!-- <form class="navbar-form navbar-left" role="search">
	        <div class="form-group">
	          <input type="text" class="form-control" placeholder="Search">
	        </div>
	        <button type="submit" class="btn btn-default">Submit</button>
	      </form> -->
	      <ul class="nav navbar-nav navbar-right">
	        <li>
	        	<!-- PHP for login button -->
		        	<?php
		        	if ($_SESSION['valid'] == false) 
		        	{
		        		echo "<a href='login.php'>Log in</a>";
		        	} else {
		        		echo "<a href='logout.php'>Log out</a>";
		        	}//else
		        	 ?> 
	        </li> <!-- prints "log in" if not logged in; if logged in prints the name of user. -->
	        <li class="dropdown">
	          <a href="index.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="highlights.php">Video Highlights</a></li>
	            <?php
	            	if ($_SESSION['valid'] != true) //if user is not logged in
		        	{
		        		echo "<li><a href='login.php'>Log in</a></li>";
		        		echo "<li><a href='signup.php'>Sign Up</a></li>";
		        	} else {
		        		echo "<li><a href='logout.php'>Log out</a></li>";
		        	}//else
	            ?>
	            <li role="separator" class="divider"></li>
	            <li><a href="contact.php">Contact Us</a></li>
	          </ul>
	        </li>
	      </ul>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>
	<!-- END NAVBAR -->
