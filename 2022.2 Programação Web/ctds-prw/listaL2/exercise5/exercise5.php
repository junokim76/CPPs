<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title>Fundamentos do PHP  </title> 
  <link rel="stylesheet" href="formata-formulario.css">  
</head> 

<body> 
  <h1>Fundamentos do PHP - Lista L2 - Exercício 5 - reposta do servidor</h1>
    <?php
    //recebendo os dados do navegador
           
    $vetorIdades[0] = $_POST["idade1"];
    $vetorIdades[1] = $_POST["idade2"];
    $vetorIdades[2] = $_POST["idade3"];
 
    //mostra resultado array 
    
    //DEBUG
   print_r($vetorIdades);
    

    //clcular media ponderada do aluno
    $mediaTotal = ($_POST["idade1"]+$_POST["idade2"]+$_POST["idade3"]) /3;
    //$media = array_sum($vetorNotas)/ count($vetorNotas);
    //calculando a media de qq vetor em PHP

    

    //exibir na tela 
    //formatação de dados em variaveis em PHP
    //$mediaFormatada = number_format($media,2, "," , "." );
    echo "<p> Caro(a) aluno(a) ,<span> UsER </span>, 
    de acordo com os dados fornecidos sua media final em PRW é: <span> $mediaTotal </span> </p>"; 
    ?>
  
</body> 
</html> 
