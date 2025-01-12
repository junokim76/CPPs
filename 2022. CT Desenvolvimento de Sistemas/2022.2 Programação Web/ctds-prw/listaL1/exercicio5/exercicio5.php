<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Fundamentos do PHP </title> 
  <link rel="stylesheet" href="formata-formulario.css">

</head> 

<body> 
 <h1> Fundamentos do PHP - listaL1 - exercício 5 - resposta do servidor </h1>

 <?php
  define("TAXA_CAMBIO", 5.20);

  $quantosDolares = $_POST["dolares"];

  $quantosReais = $quantosDolares * TAXA_CAMBIO;

  $quantosDolaresFormatados = number_format($quantosDolares, 2, ",", ".");
  $quantosReaisFormatados   = number_format($quantosReais, 2, ",", ".");
  
  echo "<p> Quantidade em dólares = <span> $$quantosDolaresFormatados </span> <br>
            Quantidade em reais convertida = <span> R$$quantosReaisFormatados </span> <br>
            
            Valor da taxa de câmbio = <span> ", TAXA_CAMBIO, "</span> </p>";
 ?>
</body> 
</html> 