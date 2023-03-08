<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Fundamentos do PHP </title> 
  <link rel="stylesheet" href="formata-formulario.css">

</head> 

<body> 
 <h1> Fundamentos do PHP - Vetores - listaL2 - exercício 5 - resposta do servidor </h1>

 <?php
  $vetorIdades = [$_POST['idade1'], 
                  $_POST['idade2'], 
                  $_POST['idade3']];


  $media = array_sum($vetorIdades) / count($vetorIdades);

  $mediaFormatada = number_format($media, 1, ",", ".");

  echo "<p> Caros(as) usuaários(as), de acordo com os dados fornecidos, a média de idades das pessoas cadastradas é igual a <span> $mediaFormatada </span> </p>";
 ?>
</body> 
</html> 