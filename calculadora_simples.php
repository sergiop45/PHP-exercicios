<!DOCTYPE html>
<html>
<head>
	<title>Calculadora</title>
</head>
<body style="margin: 0;padding: 0;">
<div style="width: 400px; height: 400px;background-color: gray;color: black;border: 10px solid black;border-top: none;">
	<h2 style="text-align: center;border: 10px solid black;">Programa Calculadora</h2>

	<form method="POST" style="padding-left: 10px;">
		Primeiro Numero: <input type="text" name="numero1" style="margin-bottom: 10px; width: 30px;">
		<br >
		Segundo Numero: <input type="text" name="numero2" style="margin-bottom:  10px; width: 30px;">
		<br >
		<input type="submit" name="calcular" value="calcular" >
		<div style="margin-top: 10px;background-color:#ccc;width: 200px;height: 200px;padding-left: 10px;">
			<h3>Resultados</h3>

		<?php 

		

		$num1 = @$_POST['numero1'];
		$num2 = @$_POST['numero2'];
		$soma = $num1 + $num2;
		echo "<br>";
		echo "SOMA: ".$soma;
		$sub = $num1 - $num2;
		echo "<br>";
		echo "SUBTRACAO: ".$sub;
		$div = $num1 / $num2;
		echo "<br>";
		echo "DIVISAO: ".$div;
		$mult = $num1 * $num2;
		echo "<br>";
		echo "MULTIPLICACAO: ".$mult;


		 ?>
		 </div>
	</div>
</div>


</body>
</html>