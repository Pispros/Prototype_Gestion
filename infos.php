<?php 
	 session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>INFORMATIONS ARTICLES</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords" content="stock_prototype">
    <meta name="author" content="ninjamer">
	<!--<link rel="icon" type="image/png" href="logo.png" />-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body background="./images/backon07.jpg">
	   <?php 
	   	    include 'entete.php';
	   ?>
	   <div class="container">
	   	<div class="row">
	   		<div class="col-xs-12">
	   <button class="btn btn-warning" style=""><a href="./acceuil.php" style="text-decoration: none;color: white">Précédent</a></button>
	   <br><br>
	   		</div>
	   	</div><br><br><br><br> 
	   <div class="row justify-content-center offset-lg-2">
	   <div class="col-xs-12 col-md-6">
	   			<a href="add_ar.php"><img src="./images/add.svg" title="AJOUTER ARTICLES" style="width: 250px;height: 250px;" class="rounded-circle"></a>	   
	   	<br><br>
	   </div>
	   <br>
	    <div class="col-xs-12 col-md-6">
	   				<a href="consult.php"><img src="./images/list.png" title="CONSULTER LA LISTE DES ARTICLES" style="width: 250px;height: 250px;" class="rounded-circle"></a>
	   	</div>
	   </table>
	   </div>
</body>
</html>