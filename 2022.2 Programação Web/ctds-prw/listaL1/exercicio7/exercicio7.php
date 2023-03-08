<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Fundamentos do PHP </title> 
  <link rel="stylesheet" href="formata-formulario.css">

</head> 

<body> 
 <h1> Fundamentos do PHP - listaL1 - exercício 7 - resposta do servidor </h1>

 <?php
  define("TAXA_DESCONTO", 5/100);
  define("TAXA_ACRESCIMO", 2/100);

  //receber, do navegador, o valor inicial da compra
  $valorCompra = $_POST['valor-compra'];

  //receber o dado relacionado ao botão de rádio escolhido no formulário. Notar que o PHP guarda, dentro da variável, o value do botão clicado. Antes de fazermos o recebimento de um dado oriundo do botão de rádio, devemos fazer o PHP testar se um dos botões de rádio foi clicado no formulário. O teste é feito por meio da função isset()
  $escolheuModalidadePagamento = isset($_POST['modalidade-pagamento']);
  $escolheuEntregaDomicilio    = isset($_POST["entrega-domicilio"]);

  //testamos se algum grupo de botão de rádio não foi escolhido no formulário. Neste caso, temos um erro fatal. Informamos o usuário deste erro e encerramos a aplicação PHP
  if(!$escolheuModalidadePagamento  OR !$escolheuEntregaDomicilio)
   {
   //condição de erro
   exit("<p> AVISO: você deve fornecer, escolhendo os botões de rádio apropriados, as informações necessárias à modalidade de pagamento da compra e à possibilidade de entrega a domicílio. Aplicação encerrada! </p>");   
   }

  //o próximo passo (se o PHP chegou nesta linha, todos os dados dos botões de rádio foram fornecidos corretamente) é descobrirmo qual botão de rádio foi selecionado em relação à modalidade de pagamento, para que o nosso código possa aplicar o desconto corretamente
  $modalidadePagamento = $_POST['modalidade-pagamento']; //o PHP guarda nesta variável o value do botão de rádio selecionado no formulário

  $desconto = 0;
  if($modalidadePagamento == "sim")
   {
   $desconto = $valorCompra * TAXA_DESCONTO;
   }
  
  //em seguida, testamos se o cliente solicitou entrega a domicílio
  $entregaDomicilio = $_POST['entrega-domicilio'];
  $acrescimo = 0;
  if($entregaDomicilio == "sim")
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