<?php
	 session_start(); 
	 include 'bd.php'  ;
	 $id = $_GET['id'] ;

	 $result = $pdo->query("SELECT * FROM articles WHERE ID='".$id."' ");

	 $rows   = $result->fetchAll(PDO::FETCH_NUM) ;
?>
<!DOCTYPE html>
<html>
<head>
	<title>MISE A JOUR</title>
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
		<button class="btn btn-warning" style="margin-left: 250px;"><a href="./consult.php" style="text-decoration: none;color: white">Précédent</a></button> <br><br>
		<div class="container" style="width: 850px;color: white;font-weight: bold;">
			  <form action="f_update.php" method="post">
			  		<label>Nom article</label>
			  		<input type="text" name="nom" class="form-control" value="<?php echo $rows[0][1] ?>">
			  		<label>Quantité</label>	
			  		<input type="text" name="qte" class="form-control" value="<?php echo $rows[0][2] ?>">
			  		<label>catégorie</label>
			  		<input type="text" name="cat" class="form-control" value="<?php echo $rows[0][3] ?>">
			  		<label>Description</label>
			  		<textarea class="form-control" name="description" rows="5"><?php echo $rows[0][4]; ?></textarea><br><input type="hidden" name="id" value="<?php echo $id; ?>">
			  		<button type="submit" class="btn btn-success">Valider</button>
			  </form>
		</div>
</body>
</html>