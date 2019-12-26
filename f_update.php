<?php 
	include 'bd.php';

	try
	{
		//$pdo->query("INSERT INTO articles VALUES (0,'".."','".."','".."','".."') ");
		$pdo->query("UPDATE articles SET nom='".$_POST['nom']."' WHERE ID='".$_POST['id']."' ");
		$pdo->query("UPDATE articles SET qte='".$_POST['qte']."' WHERE ID='".$_POST['id']."' ");
		$pdo->query("UPDATE articles SET categorie='".$_POST['cat']."' WHERE ID='".$_POST['id']."' ");
		$pdo->query("UPDATE articles SET description='".$_POST['description']."' WHERE ID='".$_POST['id']."' ");
	}
	catch(Exception $e)
	{
		$e->getMessage();
		die("<br><br><br><br><br><center><h1>Modification non autorisée ... Vérifiez bien les données !<br><br><br><a href='add_ar.php'>Retour</a></h1></center>")	;
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>MISE A JOUR</title>
</head>
<body>
		<script type="text/javascript">
				 alert("Modification éffectuée avec succès !") ;
				 window.location = 'consult.php' ;
		</script>
</body>
</html>