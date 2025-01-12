<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> PHP Fundamentals </title> 
  <link rel="stylesheet" href="formata-formulario.css">
</head> 

<body>
 <h1> PHP Fundamentals- listL1 - exercise 4 - server return</h1>

	 <?php
	  $grauFahrenheit  = $_POST["grauFahrenheit"];
	  //$valorVendaTotal  = $_POST['valorVendaTotal'];
	  //$valorDescClient = $_POST['valorDescClient'];

	  //calcular desconto do cliente
	  //$descClientFinal = $valorVendaTotal * $valorDescClient /100;

	  //calcular o valor ICMS 12%
	  //$valorVendaICMS = $valorVendaTotal * 0.12;

	 //convert F2C
	  $convertC2F = ($grauFahrenheit-32)*5/9;
	  
	  //ao final, o PHP devolve o resultado ao navegador
	  echo "<p> 
	  			Grau(s) em Celsius <span>{$convertC2F}°</span><br> <br>
			</p>";
	 ?>
</body> 
</html> 