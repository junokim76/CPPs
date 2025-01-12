<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title>Fundamentos do PHP  </title> 
  <link rel="stylesheet" href="formata-formulario.css">  
</head> 

<body> 
  <h1>Fundamentos do PHP - Lista L1 - Exercício 2 - reposta do servidor</h1>
    <?php
    //recebendo os dados do navegador
    $nome = $_POST["nome"];
    $distancia = $_POST["distancia"];
    $autonomia = $_POST["autonomia"];
    $valorGasolina = $_POST["valorGasolina"];
    
    //clcular media ponderada do aluno
    $mediaLitros = ($distancia/$autonomia);
    $mediaGastos = ($mediaLitros*$valorGasolina);
    //$mediaFormatada = number_format($media,2, "," , "." );
    //exibir na tela 
    //formatação de dados em variaveis em PHP
    
    echo "<p> Caro(a) amigo(a) ,<span> $nome </span>, 
    de acordo com os dados fornecidos sua media de litros é: <span>  $mediaLitros </span> e seu gasto foi de R$ $mediaGastos </p>"; 
    ?>
  
</body> 
</html> 
