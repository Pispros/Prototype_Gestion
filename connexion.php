<?php 
	session_start() ;
	include 'bd.php';

	$log =trim($_POST['login']) ;
	$log =htmlspecialchars($log);
	$log =stripcslashes($log)   ;

	$pass=trim($_POST['pwd'])    ;
	$pass=stripcslashes($pass)   ;
	$pass=htmlspecialchars($pass);

	$istrue = 0 ;
	$stmt = $pdo->prepare("SELECT * FROM staff WHERE login=:log AND password=:pass ");
	$stmt->execute(array('log' => $log,'pass' =>$pass ));
	$result = $stmt->rowCount();
	if ($result==1) 
	{
		$istrue = 1 ;
	}
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>CONNEXION EN COURS</title>
	<script src="./js/jquery-3.4.1.min.js"></script>
	 <meta name="viewport" content="width=device-width"/>
	<script type="text/javascript">
		$(function()
	{
		$('#lo').toggle(1000,function() 
			{
				$('#loo').toggle(1000,function() 
					{
						$('#looo').toggle(1000,function() 
							{
								$('#loooo').toggle(1000);
							});
					});
			});
	})
	</script>
</head>
<body>
	<div class="container">
		<div class="row">
	 <div><h1>Connexion à la base de données en cours ... </h1></div>
	</div><br>
	 <div class="row">
	 <div class="col-xs-6" id="lo" style="width:70px ;height:650px ;background-color: #FFD700;display: none;">
	 		<div class="row">
		<div class="col-xs-12" id="loo" style="width:300px ;height:70px ;background-color: #FFD700;display: none;">
			</div>
		<div class="row">
			<div class="col-xs-6" id="looo" style="width:70px ;height:300px ;background-color: #FFD700;display: none;margin-left: 328%"></div>
		</div>
	<div class="row">
			<div class="col-xs-12" id="loooo" style="width:300px ;height:70px ;background-color: #FFD700;display: none;"></div>
	</div>
	</div>
	</div>
			<?php  
				 if ($istrue ==1 ) 
				 {
				 	$_SESSION['loginsss'] = $_POST['login'] ;
			?>
					<script type="text/javascript">
							setTimeout(function() {window.location = 'acceuil.php' ;},4500);
					</script>
			<?php 	 	
				 }
				 else
				 {
			?>
					<script type="text/javascript">
						  setTimeout(function() {window.location = 'false.html' ;},4500)
					</script>
			<?php 
				 }	
			?>
		</div>
	</div>
	</div>
</body>
</html>