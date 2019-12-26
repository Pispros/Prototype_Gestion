<!DOCTYPE html>
<html>
<head>
	<title>TESTAGE</title>
</head>
<body>
	 <form action="test.php" method="get">
	 	    <input type="checkbox" name="test[]" value="test1"><label>Test1</label>
	 	    <input type="checkbox" name="test[]" value="test2"><label>Test2</label>
	 	    <input type="checkbox" name="test[]" value="test3"><label>Test3</label>
	 	   	<button type="submit">Valider</button>
	 </form>
	 <?php 
	 	 if ($_REQUEST['test']) 
	 	 {
	 	 	foreach ($_REQUEST['test'] as $value) 
	 	 	{
	 	 		echo $value;
	 	 	}
	 	 }
	 	 else
	 	 {
	 	 	echo "Rien de coché";
	 	 }
	 ?>
	 <script type="text/javascript">
	 	console.log("Michel1") ;
	 </script>
</body>
</html>