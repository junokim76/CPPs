<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> PHP Fundamentals </title> 
  <link rel="stylesheet" href="formata-formulario.css">
</head> 

<body>
 <h1> PHP Fundamentals- listL1 - exercise 3 - server return</h1>

	 <?php
	 //define("TAXA_DESCONTO", 10/100);
	 define("TAXA_ICMS",0.12);
	 define("COMISSAO", 0.05);
	  $nomeVendedor  = $_GET["nomeVendedor"];
	  $valorVendaTotal  = $_GET['valorVendaTotal'];
	  $valorDescClient = $_GET['valorDescClient'];

	  //calcular desconto do cliente
	  $descClientFinal = $valorVendaTotal * $valorDescClient /100;

	  //calcular o valor ICMS 12%
	  $valorVendaICMS = $valorVendaTotal * TAXA_ICMS;

	 //calcular Comissao Vendedor
	  $valorComissaoVendedor = $valorVendaTotal * COMISSAO;
	  
	  //ao final, o PHP devolve o resultado ao navegador
	  echo "<p> Relatório das porcentagens da Venda <span>($nomeVendedor)</span> : <br> <br>
			<span> Valor Total da Venda: R$ $valorVendaTotal </span><br>
			- Valor do desconto para o cliente = <span> R$ $descClientFinal </span> <br>
			- Valor do ICMS  = <span> R$ $valorVendaICMS  </span> <br>
			- Valor da comissão = <span> R$ $valorComissaoVendedor </span> <br>
			* Taxa de DESCONTO <span> $valorDescClient%</span> <br>
			* Taxa do ICMS = <span>", TAXA_ICMS*100 ,"% </span> <br>
			* Taxa do COMISSAO = <span> ",COMISSAO*100,"% </span> <br>
			</p>";
	 ?>
</body> 
</html> 