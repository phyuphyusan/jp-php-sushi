<!DOCTYPE html>
<html>
<head>
	<title>Sushi</title>

	<!-- For Logo -->
	<link rel="icon" href="photo/logo.png" type="image/x-icon">
	
		<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<!-- JQuery -->
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="custom.js"></script>
	<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
	<!-- For Font -->
	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
  <body>
	<script type="text/javascript">
		$(document).ready(function(){
			$('h4.pay').html('<strong> Payment </strong>');
			$('.k').html('<i>4800 KS </i>');
			$('.k').css({'color':'grey'});
		});
	</script>
	<!--Navbar-->
	<nav class="navbar navbar-light bg-danger">
 		<a class="navbar-brand  ml-5" href="#">
    		<img src="photo/logo.png" width="100" height="100" class="d-inline-block" alt="" loading="lazy">
   			<h2 class="d-inline text-white fontstyle">Sushi Restaurant</h2>
  		</a>
	</nav>