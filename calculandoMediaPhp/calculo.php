<!DOCTYPE html>
<html lang="pt">
<head>
	<meta charset="UTF-8">
	<title>Calculando Média</title>
	<style>
		strong.red{
			color: red;
			font-size: 16pt;
		}
		strong.amarelo{
			color: yellow;
			font-size: 16pt;
		}
		strong.verde{
			color: green;
			font-size: 16pt;
		}
		strong{
			font-size: 16pt;
		}
	</style>
</head>
<body>
	<?php 
		$n1 = isset($_GET["nota1"])?$_GET["nota1"]:0;
		$n2 = isset($_GET["nota2"])?$_GET["nota2"]:0;
		$n3 = isset($_GET["nota3"])?$_GET["nota3"]:0;
		$n4 = isset($_GET["nota4"])?$_GET["nota4"]:0;

		$media = ($n1 + $n2 + $n3 + $n4)/4;
		echo "A média é <strong>$media</strong>";
		if ($media < 5) {
			echo "<br /> você está <strong class='red'>REPROVADO!</strong>";
		}
		elseif ($media >=5 && $media <7) {
			echo "<br /> você está de <strong class='amarelo'>RECUPERAÇÃO!</strong>";
		}
		else{
			echo "<br /> você está de <strong class='verde'>APROVADO!</strong>";
		}


	 ?>
</body>
</html>