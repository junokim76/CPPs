<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Fundamentos do PHP </title> 
  <link rel="stylesheet" href="formata-formulario.css">

</head> 

<body> 
 <h1> Fundamentos do PHP - listaL1 - exercício 1 - resposta do servidor </h1>

 <?php
  /*este é o início da execução do código em PHP. Deste ponto em diante, devemos ter apenas e unicamente comandos da linguagem*/

  //Fazendo o PHP receber os dados trazidos da máquina cliente pelo navegador
  $nomeDoAluno = $_POST["nome-aluno"];
  $nota1       = $_POST['nota1'];
  $nota2       = $_POST['nota2'];
  $peso1       = $_POST['peso1'];
  $peso2       = $_POST['peso2'];

  //calcular a média aritmética ponderada do aluno
  $media = ($nota1 * $peso1 + $nota2 * $peso2)/($peso1 + $peso2);

  //fazendo formatação numérica de variáveis no PHP
  $mediaFormatada = number_format($media, 2, ",", ".");

  //ao final, o PHP devolve o resultado ao navegador
  echo "<p> Caro(a) aluno(a) <span> $nomeDoAluno </span>, de acordo com os dados fornecidos, sua média final em PRW é igual a <span> $mediaFormatada </span> </p>";
 ?>
</body> 
</html> 