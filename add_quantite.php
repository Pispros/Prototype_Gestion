<?php 
	include 'bd.php';
	$result = $pdo->query("SELECT qte,nom FROM articles WHERE ID='".$_POST['id']."'") ;

	$add    = $_POST['add'];
	$row 	= $result->fetchAll(PDO::FETCH_NUM) ;
	$qte_old= 0;
	foreach ($row as $r) 
	{
	 	$qte_old = $r[0];
	}
	$new =$qte_old+$add;
	if ($new<0) 
	{
		die("<br><br><br><br><br><center><h1>Opération non autorisée ... Vérifiez bien les données !<br><br><br><a href='consult.php'>Retour</a></h1></center>")	;
	}
	else
	{
		try
		{
		$pdo->query("UPDATE articles SET qte='".$new."' WHERE ID='".$_POST['id']."' ") ;
		
		date_default_timezone_set("Africa/Dakar");
		$pdo->query("INSERT INTO historisation_courante VALUES ('Mise à jour de ".$add." de stock sur l''article ".$row[0][1]." le ".date("Y-m-d à h:i:s")." ') ") ;	
		$pdo->query("INSERT INTO archives VALUES ('Mise à jour de ".$add." de stock sur l''article ".$row[0][1]." le ".date("Y-m-d à h:i:s")." ')") ;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>MISE A JOUR</title>
</head>
<body>
		<script type="text/javascript">
				 alert("Mise à jour de stock effectuée avec succès !") ;
				 window.location = 'consult.php' ;
		</script>
</body>
</html>