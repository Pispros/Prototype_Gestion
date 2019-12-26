<?php 
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>ACCEUIL</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords" content="stock_prototype">
    <meta name="author" content="ninjamer">
	<!--<link rel="icon" type="image/png" href="logo.png" />-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
	<style type="text/css">
		
	</style>
</head>
<body background="./images/backon07.jpg" style="max-height: 100">
	<div class="container-fluid">
		<div class="row">
	   <?php 
	   	    include 'entete.php';
	   ?>
	   </div>
	   <br><br><br>
	   <div class="row item-align-between">
	   		<div class="col-sm-12 col-md-8 col-lg-6 offset-lg-2">
	   				<a href="infos.php" ><img id="gif1" onmouseover="gif1_i();" onmouseout="gif1_o();" src="./images/t-shirt.jpg" title="INFORMATIONS ARTICLES" style="width: 250px;height: 250px;" class="rounded-circle"></a>
	   		</div>
	   		<br><br>
	   		<div class="col-sm-12 col-md-4 col-lg-4">
	   				<a href="compta.php"><img id="gif2" onmouseover="gif2_i();" onmouseout="gif2_o();" src="./images/stats.jpg" title="COMPTABILITE" style="width: 250px;height: 250px;" class="rounded-circle"></a>
	   		</div>
	   		<br><br>
	   	</div>
	   	<div class="row">
	   		<div class="col-sm-12 col-lg-6 offset-md-4 offset-lg-5">
	   				<a href="staff.php"><img id="gif3" onmouseover="gif3_i();" onmouseout="gif3_o();" src="./images/partners.png" title="PERSONNEL ET PARTENAIRES" style="width: 250px;height: 250px;" class="rounded-circle"></a>
	   		</div>
	   		<br><br>
	   	</div>	
	   <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
	   <script type="text/javascript">
	   			
				 function gif1_i() 
	   			 {
	   			 	let gift1 = document.getElementById('gif1') ;
	   			 	gift1.src = "./images/info.png" ;
	   			 }
	   			 function gif1_o() 
	   			 {
	   			 	let gift1 = document.getElementById('gif1') ;
	   			 	gift1.src= "./images/t-shirt.jpg" ;
	   			 }

	   			 function gif2_i() 
	   			 {
	   			 	let gift2 = document.getElementById('gif2') ;
	   			 	gift2.src ="./images/comp.jpg" ;
	   			 }
	   			 
	   			 function gif2_o() 
	   			 {
	   			 	let gift2 = document.getElementById('gif2') ;
	   			 	gift2.src= "./images/stats.jpg" ;
	   			 }

	   			 function gif3_i() 
	   			 {
	   			 	let gift3 = document.getElementById('gif3') ;
	   			 	gift3.src="./images/settings.gif" ;
	   			 }
	   			 function gif3_o() 
	   			 {
	   			 	let gift3 = document.getElementById('gif3') ;
	   			 	gift3.src="./images/partners.png" ;
	   			 }
	   			 

	   </script>
	  </div>
</body>
</html>