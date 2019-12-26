<?php 
	session_start();
	ob_start();
	require 'vendor/autoload.php';

	use Spipu\Html2Pdf\Html2Pdf;
	use Spipu\Html2Pdf\Exception\Html2PdfException;
	use Spipu\Html2Pdf\Exception\ExceptionFormatter;
	include 'bd.php';

	$id_tab[0] = '';
	$inc       = 0 ;
	
	foreach ($_POST['choix'] as $value) 
	{
		if ($value="") 
		{
			die("<br><br><br><br><br><center><h1>Vous n'avez pas effectué de choix ... <br><br><br><a href='./../commandes.php'>Retour</a></h1></center>")	;
		}
	}

	foreach ($_POST['choix'] as $value) 
	{
		$id_tab[$inc] = $value ;
		$inc++ ;
	}
	
	$qte[0]   = '';
	$inc2     = 0 ;

	foreach ($_POST['qte'] as $value) 
	{
		if ($value !='') 
		{
			$qte[$inc2] = $value ;
			$inc2++;
		}
	}

	$nom_produit[0] = '';
	$Prix[0]        = '';
	$new[0]			= 0 ;
	$inc1           = 0 ;

	for ($i=0; $i <count($id_tab) ; $i++) 
	{ 
		$result = $pdo->query("SELECT nom,prix,qte FROM articles WHERE ID='".$id_tab[$i]."' ");
		$row    = $result->fetchAll(PDO::FETCH_NUM) ;

		foreach ($row as $r) 
		{
			$nom_produit[$inc1] = $r[0] ;
			$Prix[$inc1]        = $r[1] ;
			

			if ($r[2]<$qte[$inc1]) 
			{
				die("<br><br><br><br><br><center><h1>Opération non autorisée ... Vérifiez bien les données, en l'occurence les quantités en stock !<br><br><br><a href='./../commandes.php'>Retour</a></h1></center>")	;
			}
			else
			{
				$new[$inc1] = $r[2]- $qte[$inc1] ;
			}
			$inc1++;
		}
	}

	for ($i=0; $i <count($id_tab) ; $i++) 
	{ 
		$pdo->query("UPDATE articles SET qte='".$new[$i]."' WHERE ID='".$id_tab[$i]."' ");
	}

?>
<page>	
<page_header>
<img src="stats.jpg" style="width: 50px;height: 50px;display: inline;"><span style="margin-left: 150px;font-weight: bold;font-size: 25px;">PROTOTYPE FACTURE</span>
<hr>
</page_header>	
		<style type="text/css">
			table
			{
				border-collapse: collapse;
			}
			th
			{
				width: 120px;
				font-size: 20px;
			}
			td
			{
				width: 120px;
				font-size: 18px;
			}
			.a
			{
				width: 200px;	
			}
			.b
			{
				width: 150px;
			}
			.c
			{
				width: 750px;
			}
		</style>
		<br><br><br><br><br><br><br><br>
		<table>
				<!--<tr>
					<td class="c"><h3>Nom du client :&nbsp;<?php echo $_POST['client']; ?></h3></td>
				</tr>-->
		</table>
		<br><br><br><br>
		<table border="2">
				<tr>
	  		  	<th class="a">&nbsp;DESIGNATION</th>
	  		  	<th width="200px">&nbsp;PRIX</th>
	  		  	<th width="200px">&nbsp;QUANTITE</th>
	  		  	<th class="b">&nbsp;P.TOTAL</th>
	  		  </tr>
	  		  <?php 
	  		  		for ($i=0; $i <count($id_tab) ; $i++) 
	  		  		{ 
	  		  ?>
	  		  			<tr>
	  		  				<td>
	  		  					 <?php echo $nom_produit[$i];?>
	  		  				</td>
	  		  				<td>
	  		  					 <?php echo $Prix[$i]; ?>
	  		  				</td>
	  		  				<td>
	  		  					<?php echo $qte[$i]; ?>
	  		  				</td>
	  		  				<td>
	  		  					<?php 
	  		  						 $prix = $Prix[$i]             	;
	  		  						 $temp = $qte[$i]				; 
	  		  						 echo $prix*$temp				;   
	  		  						 $total = $total + $prix*$temp  ;
	  		  					 ?>
	  		  				</td>
	  		  			</tr>
	  		  <?php  
	  		  		}
	  		  ?>
	  		   <tr>
	  		   		<th colspan="3">
	  		   			Total
	  		   		</th>
	  		   		<td>
	  		   			<?php echo $total; ?>
	  		   		</td>
	  		   </tr>
		</table>
		<page_footer>
					  <hr>
				      <h3>Téléphone :(+228) 22 xx xx xx xx <br>
				      Mail      :xxx@pxxxx.com <br>
				      © 2019 xxxx - All rights reserved</h3>
		</page_footer>
</page>
<?php  
	try 
	{
    $content = ob_get_clean();
    $html2pdf = new Html2Pdf('P', 'A4', 'fr');
    $html2pdf->writeHTML($content);
    $html2pdf->output("$itest.pdf");
	} 

	catch (Html2PdfException $e) 
	{
    $html2pdf->clean();
    $formatter = new ExceptionFormatter($e);
    echo $formatter->getHtmlMessage();
	}
?>