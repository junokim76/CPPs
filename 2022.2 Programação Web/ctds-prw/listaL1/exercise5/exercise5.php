<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> PHP Fundamentals </title> 
  <link rel="stylesheet" href="formata-formulario.css">
</head> 

<body>
 <h1> PHP Fundamentals- listL1 - exercise 5 - server return</h1>

	 <?php
	 define("PTAX", 5.0617);
	 //$PTAX = PTAX;
	  $valoremDolar  = $_POST["valoremDolar"];
	  //$valorVendaTotal  = $_POST['valorVendaTotal'];
	  //$valorDescClient = $_POST['valorDescClient'];

	  //calcular desconto do cliente
	  //$descClientFinal = $valorVendaTotal * $valorDescClient /100;

	  //calcular o valor ICMS 12%
	  //$valorVendaICMS = $valorVendaTotal * 0.12;

	 //convert F2C
	  $convertUS2REAL = $valoremDolar * PTAX;
	  
	  //ao final, o PHP devolve o resultado ao navegador
	  echo "<p> 
	  			<span>Conversão de Dolar em Reais</span> <br> <br>
				- Valor em Reais : <span>$convertUS2REAL</span>  <br>
				- Valor da taxa de cambio (PTAX): ",PTAX," <br>
			</p>"
	 ?>
</body> 
</html> 