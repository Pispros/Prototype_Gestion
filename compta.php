<?php 
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>COMPTABILITE</title>
	<meta name="viewport" content="width=device-width, target-densitydpi=device-dpi">
	<meta name="keywords" content="stock_prototype">
    <meta name="author" content="ninjamer">
	<!--<link rel="icon" type="image/png" href="logo.png" />-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body background="./images/back07.png">
	   <div class="container">
	   	<?php include 'entete.php'; ?>
	   	<br><br><br>
	   	<button class="btn btn-warning"><a href="./acceuil.php" style="text-decoration: none;color: white">Précédent</a></button> 
	   		   <br><br><br>
			  <a target="_blank" href="./commandes.php"><button class="btn btn-primary">Nouvelle commande</button></a>
	   </div>
</body>
</html>