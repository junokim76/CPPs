<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Fundamentos do PHP </title> 
  <link rel="stylesheet" href="formata-formulario.css">

</head> 

<body> 
 <h1> Fundamentos do PHP - listaL1 - exercício 4 - resposta do servidor </h1>

 <?php
  $tf = $_POST["tf"];

  $tc = ($tf - 32) * 5/9;

  $tfFormatado = number_format($tf, 2, ",", ".");
  $tcFormatado  = number_format($tc, 2, ",", ".");

  echo "<p> Resultado da conversão termométrica: <br>
       Valor da temperatura em Fahrenheit = <span> {$tfFormatado}ºF </span> <br>
       Valor da temperatura em Celsius    = <span> {$tcFormatado}ºC </span> </p>"; //observe o uso de chaves quando queremos acrescentar uma unidade sem espaço em branco após o valor numérico dentro da variável
 ?>
</body> 
</html> 