<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title>Fundamentos do PHP  </title> 
  <link rel="stylesheet" href="formata-formulario.css">  
</head> 

<body> 
  <h1>Fundamentos do PHP - Lista L1 - Exercício 1 - reposta do servidor</h1>
    <?php
    //recebendo os dados do navegador
    $nomeAluno = $_POST["nome-aluno"];
    $nota1 = $_POST["nota1"];
    $nota2 = $_POST["nota2"];
    $peso1 = $_POST["peso1"];
    $peso2 = $_POST["peso2"];
    //clcular media ponderada do aluno
    $media = ($nota1*$peso1+$nota2*$peso2) /($peso1+$peso2);
    //exibir na tela 
    //formatação de dados em variaveis em PHP
    $mediaFormatada = number_format($media,2, "," , "." );
    echo "<p> Caro(a) aluno(a) ,<span> $nomeAluno </span>, 
    de acordo com os dados fornecidos sua media final em PRW é: <span> $mediaFormatada </span> </p>"; 
    ?>
  
</body> 
</html> 
