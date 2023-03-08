<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Fundamentos do PHP </title> 
  <link rel="stylesheet" href="formata-formulario.css">

</head> 

<body> 
 <h1> Fundamentos do PHP - Vetores - listaL2 - exercício 4 - resposta do servidor </h1>

 <?php
  //começamos criando um vetor com índice numérico. Neste vetor, iremos catalogar o nome do produto disponível para compra no site e o preço de cada produto
  $vetorPreco = ["Cerveja" => 8.00,
                 "Livro"   => 100.00,
                 "Pizza"   => 90.50];

  //testando se nenhum produto foi comprado
  if(!isset($_POST['produtos']))
   {
    exit("<p> Caro cliente, você não adquiriu nenhum produto de nossa loja virtual. O valor final da compra é R$0,00. Volte sempre! </p>");
   }

  //vamos fazer o PHP receber os produtos comprados e guardar em um vetor
  $vetorProdutosComprados = $_POST['produtos'];

  //inicializamos uma variável somatória
  $total = 0;

  foreach($vetorProdutosComprados as $nomeProduto)
   {
    $total = $total + $vetorPreco[$nomeProduto];
   }

  $totalFormatado = number_format($total, 2, ",", ".");

  echo "<p> Caro usuário, de acordo com os produtos adquiridos, o valor final da sua compra é de: <span> $totalFormatado </span> </p>";

  //mostrar a lista de produtos comprados
  echo "<br> <p> Lista de produtos adquiridos: <br>";

  foreach($vetorProdutosComprados as $nomeProduto)
   {
    echo "$nomeProduto <br>";
   }

  echo "</p>";

 ?>
</body> 
</html> 