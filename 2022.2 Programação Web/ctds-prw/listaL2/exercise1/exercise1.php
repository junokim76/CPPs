<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title>Fundamentos do PHP  </title> 
  <link rel="stylesheet" href="formata-formulario.css">  
</head> 

<body> 
  <h1>Fundamentos do PHP - Lista L2 - Exercício 1 - reposta do servidor</h1>
    <?php
    //recebendo os dados do navegador
    $nomeAluno = $_POST["nome-aluno"];
       
    $vetorNotas[0] = $_POST["nota1"];
    $vetorNotas[1] = $_POST["nota2"];
    $vetorNotas[2] = $_POST["nota3"];
    //Outra Forma
    $vetorNotas = [$_POST["nota1"], $_POST["nota2"], $_POST["nota3"]];

    //mais uma outra forma
    $vetorNotas = array($_POST["nota1"], $_POST["nota2"],$_POST["nota3"]);
    //mostra resultado array 
    
    //DEBUG
   // print_r($vetorNotas);
    

    //clcular media ponderada do aluno
    //$media = ($_POST["nota1"]+$_POST["nota2"]+$_POST["nota3"]) /3;
    $media = array_sum($vetorNotas)/ count($vetorNotas);
    //calculando a media de qq vetor em PHP



    //exibir na tela 
    //formatação de dados em variaveis em PHP
    $mediaFormatada = number_format($media,2, "," , "." );
    echo "<p> Caro(a) aluno(a) ,<span> $nomeAluno </span>, 
    de acordo com os dados fornecidos sua media final em PRW é: <span> $mediaFormatada </span> </p>"; 
    ?>
  
</body> 
</html> 
