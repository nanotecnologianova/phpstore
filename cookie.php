<!DOCTYPE html>
<html lang="pt-br">
   <head>
       <title>Cookies</title>
   </head>
	<body>
      <?php
		setcookie("afiliado","5323", (time() + (3 * 24 * 360)));
		
		$afiliado = $_COOKIE["afiliado"];
		
		echo "N�mero do afiliado: $afiliado;
	  ?>
	</body>
</html>