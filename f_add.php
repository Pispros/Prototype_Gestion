<?php 
	include 'bd.php';

	try
	{
		$pdo->query("INSERT INTO articles VALUES (0,'".$_POST['nom']."','".$_POST['qte']."','".$_POST['cat']."','".$_POST['description']."','".$_POST['prix']."') ");
	}
	catch(Exception $e)
	{
		
		//die($e->getMessage());
		die("<br><br><br><br><br><center><h1>Ajout non autorisé ... Vérifiez bien les données !<br><br><br><a href='add_ar.php'>Retour</a></h1></center>")	;
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>FINALISATION AJOUT</title>
</head>
<body>
		<script type="text/javascript">
				 alert("Ajout éffectué avec succès !") ;
				 window.location = 'add_ar.php' ;
		</script>
</body>
</html>