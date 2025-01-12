<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Fundamentos do PHP </title> 
  <link rel="stylesheet" href="formata-formulario.css">

</head> 

<body> 
 <h1> Fundamentos do PHP - Vetores - listaL2 - exercício 1 - resposta do servidor </h1>

 <?php
  //Fazendo o PHP receber os dados trazidos da máquina cliente pelo navegador
  /*$nota1       = $_POST['nota1'];
  $nota2       = $_POST['nota2'];
  $nota3       = $_POST['nota3'];*/

  //criar o vetor com os dados guardados nas variáveis escalares
  $vetorNotas[0] = $_POST['nota1'];
  $vetorNotas[1] = $_POST['nota2'];
  $vetorNotas[2] = $_POST['nota3'];

  //outra forma que o PHP tem de criar o mesmo vetor, com índice numérico
  $vetorNotas = [$_POST['nota1'], 
                 $_POST['nota2'], 
                 $_POST['nota3']];

  //outra forma de criar o mesmo vetor acima
  $vetorNotas = Array($_POST['nota1'], $_POST['nota2'], $_POST['nota3']);

  //note, abaixo, uma das formas de o desenvolvedor conferir o conteúdo do vetor criado pela apliação web  
  print_r($vetorNotas);

  //calculando a média de qualquer vetor com dados numéricos em PHP
  /*$soma = array_sum($vetorNotas);
  $media = $soma / count($vetorNotas);*/

  $media = array_sum($vetorNotas) / count($vetorNotas);

  //fazendo formatação numérica de variáveis no PHP
  $mediaFormatada = number_format($media, 1, ",", ".");

  //ao final, o PHP devolve o resultado ao navegador
  echo "<p> Caros(as) alunos(as), de acordo com os dados fornecidos, a média final da turma, em PRW, é igual a <span> $mediaFormatada </span> </p>";
 ?>
</body> 
</html> 