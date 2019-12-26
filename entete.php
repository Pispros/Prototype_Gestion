<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords" content="stock_prototype">
    <meta name="author" content="ninjamer">
	<!--<link rel="icon" type="image/png" href="logo.png" />-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://kit.fontawesome.com/8312f1ca82.js" crossorigin="anonymous"></script>
	<style type="text/css">
		.a:hover
		{
			color: #FFD700;
		}
	</style>
</head>
<body>
	 <div class="container alert alert-dark" style="background-color:  #262626;width: 650px;color: white;">
	 	<div class="row item-align-between">
	 		<div class="col-xs-12 col-md-8">
	 		<i class="fas fa-user"></i>&nbsp;: <?php echo $_SESSION['loginsss']; ?>
	 		</div>
	 		<div class="col-xs-12 col-md-4">
	 			<i class="fas fa-sign-out-alt"></i>&nbsp;<a href="./index.php?logout=yes" style="text-decoration: none;" class="a">Déconnexion</a>
	 		</div>
	 	</div>
	 </div>
	 <?php 
	 	 if ($_SESSION['loginsss']=='') 
	 	 {
	 ?>
	 		<script type="text/javascript">
	 				 window.location = 'error.html' ;
	 		</script>
	 <?php 
	 	 }
	 ?>
</body>
</html>