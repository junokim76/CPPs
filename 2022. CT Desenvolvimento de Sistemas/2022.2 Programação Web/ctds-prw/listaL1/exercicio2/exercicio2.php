<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Fundamentos do PHP </title> 
  <link rel="stylesheet" href="formata-formulario.css">
</head> 

<body> 
 <h1> Fundamentos do PHP - listaL1 - exercício 2 - resposta do servidor </h1>

 <?php
  $distancia  = $_POST["distancia"];
  $autonomia  = $_POST['autonomia'];
  $preco      = $_POST['preco-gasolina'];

  //calcular a quantidade de litros gastos de combustível
  $quantosLitrosGastos = $distancia / $autonomia;

  //calcular o valor gasto, em reais, na viagem
  $gastouQuantosReais = $quantosLitrosGastos * $preco;

  //ao final, o PHP devolve o resultado ao navegador
  echo "<p> Relatório dos dados da viagem da Maria: <br>
        Preço do litro de combustível = <span> $preco </span> <br>
        Quantidade de litros gastos na viagem = <span> $quantosLitrosGastos litros </span> <br>
        Despesa com a viagem, em reais = <span> R$$gastouQuantosReais </span> </p>";
 ?>
</body> 
</html> 