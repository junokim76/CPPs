<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> PHP Fundamentals </title> 
  <link rel="stylesheet" href="formata-formulario.css">
</head> 

<body>
 <h1> PHP Fundamentals- listL1 - exercise 6 - server return</h1>

	 <?php
	 //define("TAXA_DESCONTO", 10/100);
	 //define("TAXA_ICMS",0.12);
	 define("COMISSAO", 0.05);
	  $nomeVendedor  = $_POST["nomeVendedor"];
	  $valorVendaTotal  = $_POST['valorVendaTotal'];
	  $valorDescClient = $_POST['valorDescClient'];
	  $valorComVendedor = $_POST['valorComVendedor'];

	  //calcular desconto do cliente
	  $descClientFinal = $valorVendaTotal * $valorDescClient /100;

	  //calcular o valor ICMS 12%
	  //$valorVendaICMS = $valorVendaTotal * TAXA_ICMS;

	 //calcular Comissao Vendedor
	  $calculaComissaoVendedor = $valorVendaTotal * $valorComVendedor/100;
	  
	  //ao final, o PHP devolve o resultado ao navegador
	  echo "<p> Relatório das porcentagens da Venda <span>($nomeVendedor)</span> : <br> <br>
			<span> Valor Total da Venda: R$ $valorVendaTotal </span><br>
			- Valor do desconto para o cliente = <span> R$ $descClientFinal </span> <br>
			- Valor da comissão = <span> R$ $calculaComissaoVendedor </span> <br>
			* Taxa de DESCONTO <span> $valorDescClient%</span> <br>
			* Taxa do COMISSAO = <span> $valorComVendedor% </span> <br>
			</p>";
	 ?>
</body> 
</html> 