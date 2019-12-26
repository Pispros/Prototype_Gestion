<?php 
	session_start();
	if ($_GET['logout']) 
	{
		session_destroy();
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>BIENVENUE SUR L'APPLICATION DE GESTION ET SUIVI DES STOCKS</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="stock_prototype">
    <meta name="author" content="ninjamer">
	<!--<link rel="icon" type="image/png" href="logo.png" />-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script defer src="https://use.fontawesome.com/releases/v5.8.2/js/all.js" integrity="sha384-DJ25uNYET2XCl5ZF++U8eNxPWqcKohUUBUpKGlNLMchM7q4Wjg2CUpjHLaL8yYPH" crossorigin="anonymous"></script>
</head>
<body background="./images/backon04.jpg" style="color: #FFD700;font-weight: bold;font-size: 20px;">
	<br>
	<div class="row justify-content-center">
		<div class="col-xs-12" style="width: 450px;height: 600px;border-radius: 10%;background-image: url(./images/backon05.jpg);">
			  <form method="post" action="connexion.php"style="width:360px;padding-left:40px;margin-top:150px">
			  		 <label>Nom d'utilisateur</label>
			  		 <input type="text" name="login" class="form-control"><br><br><br>
			  		 <label>Mot de Passe</label><i onclick="see()" class="fas fa-eye" style="margin-left: 160px;"></i>
			  		 <input type="password" name="pwd" id="pass" class="form-control">
					<br><br><button type="submit" class="btn btn-danger">Valider</button>
			  </form>
		</div>
	</div>
		<script type="text/javascript" src="./js/scriptPass.js"></script>
		<!--<script type="text/javascript">
		setTimeout(function()
			{ 
				<?php 
					session_destroy();
				 ?> 
			}, 1000*30);
	</script>-->
</body>
</html>