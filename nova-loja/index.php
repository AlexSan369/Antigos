<!DOCTYPE html>

<html>
<head>
 <meta charset="utf-8">
 <title>Teste de loja virtual</title>
 
 <link href="css/css.css" rel="stylesheet" type="text/css" />
 
 <script type="text/javascript" src="js/jquery-1.6.4.min.js"></script>
 <script type="text/javascript" src="js/abas.js"></script>
 
 </head>

<body>
	<div id="Principal">
		
		<section id="cabecalho">
			<?php include_once("cabecalho.php"); ?>
		</section><!--fimTopo-->
			
		<section id="corpo">
		   <?php include_once("detalhe.php"); ?>
		</section><!--fimCorpo-->
		
		<footer id="rodape">
		    <?php include_once("rodape.php") ?>
		</footer><!--fimRodape-->
	
	</div><!--fimPrincipal-->
</body>

</html>