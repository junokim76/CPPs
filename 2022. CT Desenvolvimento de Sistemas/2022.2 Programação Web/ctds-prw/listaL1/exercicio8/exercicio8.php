<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Fundamentos do PHP </title> 
  <link rel="stylesheet" href="formata-formulario.css">

</head> 

<body> 
 <h1> Fundamentos do PHP - listaL1 - exercício 8 - resposta do servidor </h1>

 <?php
  define("TAXA_DESCONTO", 5/100);
  define("TAXA_ACRESCIMO", 2/100);

  $valorCompra = $_POST['valor-compra'];

  $escolheuModalidadePagamento = isset($_POST['modalidade-pagamento']);
  $escolheuEntregaDomicilio    = isset($_POST["entrega-domicilio"]);

  $desconto = 0;

  if($escolheuModalidadePagamento)
   {
   $desconto = $valorCompra * TAXA_DESCONTO;
   }

  $acrescimo = 0;

  if($escolheuEntregaDomicilio)
   {
   $acrescimo = $valorCompra * TAXA_ACRESCIMO;
   }

  //calcularmos o valor final da compra
  $valorFinalCompra = $valorCompra - $desconto + $acrescimo;

  $valorCompraFormatado      = number_format($valorCompra, 2, ",", ".");
  $acrescimoFormatado        = number_format($acrescimo, 2, ",", ".");
  $descontoFormatado         = number_format($desconto, 2, ",", ".");
  $valorFinalCompraFormatado = number_format($valorFinalCompra, 2, ",", ".");

  echo "<p> Resultados do processamento da venda: <br>
        Valor inicial da compra = <span> R$$valorCompraFormatado </span> <br>
        Valor final da compra   = <span> R$$valorFinalCompraFormatado </span> <br>
        Valor do desconto       = <span> R$$descontoFormatado </span> <br>
        Valor do acréscimo      = <span> R$$acrescimoFormatado </span> </p>";
  ?>
</body> 
</html> 