<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Fundamentos do PHP </title> 
  <link rel="stylesheet" href="formata-formulario.css">

</head> 

<body> 
 <h1> Fundamentos do PHP - listaL1 - exercício 3 - resposta do servidor </h1>

 <?php
  //criando constantes em PHP para representar os percentuais de descontos dados no problema
  define("TAXA_DESCONTO", 10/100);
  define("TAXA_ICMS", 12/100);
  define("TAXA_COMISSAO", 5/100);
  
  //Não esqueça que o enunciado está pedindo que recebamos os dados do formulário por meio do método GET de envio do navegador
  $valorDaCompra = $_GET["valor-compra"];

  //cálculo do valor do desconto do cliente
  $descontoCliente = $valorDaCompra * TAXA_DESCONTO;

  //cálculo do valor do ICMS
  $descontoICMS = $valorDaCompra * TAXA_ICMS;

  //cálculo da comissão do vendedor
  $comissaoVendedor = $valorDaCompra * TAXA_COMISSAO;

  $valorFinalDaCompra = $valorDaCompra - $descontoCliente;

  $valorDaCompraFormatado = number_format($valorDaCompra, 2, ",", ".");
  $valorFinalDaCompraFormatado = number_format($valorFinalDaCompra, 2, ",", ".");
  $descontoClienteFormatado = number_format($descontoCliente, 2, ",", ".");
  $descontoICMSFormatado = number_format($descontoICMS, 2, ",", ".");
  $comissaoVendedorFormatado = number_format($comissaoVendedor, 2, ",", ".");

  echo "<p> Loja AAA - relatório completo da venda: <br>
       Valor inicial da compra = <span> R$$valorDaCompraFormatado </span> <br>
       Valor final da compra   = <span> R$$valorFinalDaCompraFormatado </span> <br>
       Valor do desconto dado ao cliente = <span> R$$descontoClienteFormatado </span> <br>
       Valor do ICMS = <span> R$$descontoICMSFormatado </span> <br>
       Valor da comissão do vendedor = <span> R$$comissaoVendedorFormatado </span> <br>
       Valor da taxa de desconto da loja ao cliente = <span>", TAXA_DESCONTO, "</span> <br>
       Valor da taxa do ICMS = <span>", TAXA_ICMS, "</span> <br>
       Valor da taxa de comissão do vendedor = <span>", TAXA_COMISSAO, "</span> </p>";

 ?>
</body> 
</html> 