<?php 
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>AJOUT ARTICLE</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords" content="stock_prototype">
    <meta name="author" content="ninjamer">
	<!--<link rel="icon" type="image/png" href="logo.png" />-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body background="./images/backon03.jpg">
		<?php 
			 include 'entete.php';
		?>
		<div class="container">
			<div class="row offset-1">
				<div class="col-xs-12">
		<button class="btn btn-warning"><a href="./infos.php" style="text-decoration: none;color: white">Précédent</a></button> <br><br>
				</div>
			</div>
		<div class="container" style="width: 850px;color: white;font-weight: bold;">
			  <form action="f_add.php" method="post">
			  		<label>Nom article</label>
			  		<input type="text" name="nom" class="form-control">
			  		<label>Quantité</label>	
			  		<input type="text" name="qte" class="form-control">
			  		<label>Catégorie</label>
			  		<input type="text" name="cat" class="form-control">
			  		<label>Prix</label>
			  		<input type="text" name="prix" class="form-control">
			  		<label>Description</label>
			  		<textarea class="form-control" name="description" rows="5"></textarea><br>
			  		<button type="submit" class="btn btn-success">Valider</button>
			  </form>
		</div>
	</div>
</body>
</html>