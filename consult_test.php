<?php  
	session_start();
	include 'bd.php';

	$debut  = 0 ;
	$result = $pdo->query("SELECT DISTINCT * FROM articles");

	$rows  = $result->fetchAll(PDO::FETCH_NUM) ;
	$nr    = $result->rowCount()			   ;

	$nom[0]='' ;
	$qte[0]='' ;
	$cat[0]='' ;
	$des[0]='' ;
	$inc   =0  ;
	foreach ($rows as $row) 
	{
		$nom[$inc]=$row[1];
		$qte[$inc]=$row[2];
		$cat[$inc]=$row[3];
		$des[$inc]=$row[4];
	}
	print_r($nom);
	function Affichage($debut)
	{
		$fin = $debut+5;
		if ($fin>count($nom)) 
		{
			$fin = count($nom)-1 ; 
		}
				for($i=$debut;$i<=$fin;$i++)
				{
?>
		    		<tr>
		    			<td><?php echo $nom[$debut]; ?></td>
		    			<td><?php echo $qte[$debut]; ?></td>
		    			<td><?php echo $cat[$debut]; ?></td>
		    			<td><?php echo $des[$debut]; ?></td>
		    			<td>
		    				<form method="post" action="add_quantite">
		    					  <input type="text" name="add" class="form-control" style="width: 65px;display: inline;">&nbsp;&nbsp;&nbsp;<button type="submit" class="btn btn-default"><i class="fas fa-plus-circle"></i></button>&nbsp;&nbsp;&nbsp;<a target="_blank" href="update.php?id=<?php echo $row[0]; ?>"><i class="fas fa-redo-alt"></i></a>
		    				</form>
		    			</td>
		    		</tr>
		    		<tr>
 		    			<td colspan="5"><hr style="background-color: #FFD700;"></td>
		    		</tr>
<?php 
				}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>CONSULTER LES ARTICLES</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords" content="stock_prototype">
    <meta name="author" content="ninjamer">
	<!--<link rel="icon" type="image/png" href="logo.png" />-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body background="./images/backon04.jpg">
		<?php include 'entete.php'; ?>
		<button class="btn btn-warning" style="margin-left: 130px;"><a href="./infos.php" style="text-decoration: none;color: white">Précédent</a></button> 
		<div class="container" style="background-color: white;color: black;width: 1050px;border-radius: 10px">
			<table style="margin-top: 50px;width: 100%;">
			<tr class="alert alert-dark" style="color: #FFD700;background-color: black;height: 50px;">
				<th width="250px">Nom</th>
				<th width="250px">Quantité</th>
				<th width="250px">Catégorie</th>
				<th width="250px">Description</th>
				<th width="250px">OPTIONS</th>
			</tr>
			<tr>
		    	<td colspan="5"><br></td>
		    </tr>
			<?php
				 Affichage($debut) ; 
			?>
			</table>
		</div>
		<center><button class="btn btn-danger rounded-circle"><<</button>  <button class="btn btn-primary rounded-circle">>></button></center>
		<script type="text/javascript">
				 let taille_totale = <?php echo $nr; ?>;
				 let nbretab       = 0				   ;
				 
				 function next() 
				 {
				 	// body...
				 }

		</script>
</body>
</html>