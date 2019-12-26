<?php  
	session_start();
	include 'bd.php';

	$debut  = 0 ;
	$result = $pdo->query("SELECT DISTINCT * FROM articles");

	$rows  = $result->fetchAll(PDO::FETCH_NUM) ;
	$nr    = $result->rowCount()               ;

	/*$inc   =0 :
	for ($i=0; $i <$nr/5 ; $i++) 
	{ 
		# code...
	}*/

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
<body background="./images/back03.jpg">
		<?php include 'entete.php'; ?>
		<button class="btn btn-warning" style="margin-left: 130px;"><a href="./infos.php" style="text-decoration: none;color: white;">Précédent</a></button> 
		<div class="row">
		<div class="container alert alert-dark" style="background-color: black;color: #FFD700;position: absolute;top: 150px;left: 95px;"><input class="form-control" id="myInput" type="text" placeholder="Rechercher article ..."></div></div>

		<div class="container" style="color: black;width: 1250px;border-radius: 10px;position: absolute;top: 215px;left: 75px;">
			<div class="table-responsive-xs">
			<table class="table-hover" id="myTable" style="width: 1150px;">
			<thead>
			<tr>
				<th width="250px"><div class="alert alert-dark" style="color: #FFD700;background-color: black;height: 50px;">Nom</div></th>
				<th width="100px"><div class="alert alert-dark" style="color: #FFD700;background-color: black;height: 50px;">Quantité</div></th>
				<th width="100px"><div class="alert alert-dark" style="color: #FFD700;background-color: black;height: 50px;">Prix</div></th>
				<th width="250px"><div class="alert alert-dark" style="color: #FFD700;background-color: black;height: 50px;">Catégories</div></th>
				<th width="350px"><div class="alert alert-dark" style="color: #FFD700;background-color: black;height: 50px;">Description</div></th>
				<th width="200px"><div class="alert alert-dark" style="color: #FFD700;background-color: black;height: 50px;">OPTIONS</div></th>
			</tr>
			</thead>
			<tbody>
			<?php
				 $ty = 0 ;
				 $type_row = '';
				 foreach ($rows as $row) 
				 {
				 	if ($ty%2) 
			  		  			{
			  		  				$type_row = "alert alert-dark" ;
			  		  			}
			  		  			else
			  		  			{
			  		  				$type_row = "alert alert-light";
			  		  			}
			?>
		    		<tr>
		    			<div >
		    			<td class="<?php echo $type_row;?>" ><?php echo $row[1]; ?></td></div>
		    			<td class="<?php echo $type_row;?>" ><?php echo $row[2]; ?></td></div>
		    			<td class="<?php echo $type_row;?>" ><?php echo $row[5]; ?></td></div>
		    			<td class="<?php echo $type_row;?>" ><?php echo $row[3]; ?></td></div>
		    			<td class="<?php echo $type_row;?>" ><?php echo $row[4]; ?></td></div>
		    			<td class="<?php echo $type_row;?>">
		    				<form method="post" action="add_quantite.php">
		    					  <input type="text" name="add" class="form-control" style="width: 55px;display: inline;">&nbsp;&nbsp;&nbsp;<input type="hidden" name="id" value="<?php echo $row[0];?>">
		    					  <button title="Ajouter" type="submit" class="btn btn-default"><i class="fas fa-plus-circle"></i></button>&nbsp;&nbsp;<a title="Modifier" href="update.php?id=<?php echo $row[0]; ?>"><i class="fas fa-redo-alt"></i></a>
		    				</form>
		    			</td>
		    			</div>
		    		</tr>
		    		
		    <?php 
		    	$ty++; 
		    	}
			?>
			</tbody>
			</table>
			</div>
		</div>
		<div style="position: absolute;top: 830px;left: 600px;">
		<!--<center><button class="btn btn-danger rounded-circle"><<</button>  <button class="btn btn-primary rounded-circle">>></button></center>-->
		</div>
		<script type="text/javascript">
				 let taille_totale = <?php echo $nr; ?>;
				 let nbretab       = 0				   ;
				 
				 function next() 
				 {
				 	// body...
				 }

		</script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
</body>
</html>