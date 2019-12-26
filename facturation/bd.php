
<?php 
	 $pdo = new PDO("mysql:host=localhost;dbname=prototype;","root","passer") ;
	 $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION)            ;
?>