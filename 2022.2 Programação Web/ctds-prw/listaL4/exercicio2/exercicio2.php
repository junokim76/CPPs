<?php
 function validarIdade($idade)
  {
  $idade = filter_var($idade, FILTER_VALIDATE_INT);

  if($idade === false || $idade < 0)
   {
   exit("<p> Caro usuário, o valor da idade é inválido. Verifique o que você digitou e tente novamente! </p>");
   }
  }

  //============================================================================

  function validarVoto($idade)
   {
   if($idade >= 16)
    {
    $situacao = "Está apto a votar";
    }
   else
    {
    $situacao = "Não está apto a votar";
    }
   echo "<p> Caro cidadão, de acordo com a idade fornecida, que é de <span> $idade anos </span>, declaramos que você <span> $situacao </span> </p>";
   }
?>
<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Modularização de código em PHP </title> 
  <link rel="stylesheet" href="formata-formulario.css">
</head> 

<body> 
 <h1> Funções de usuário em PHP - listaL4 - exercício 2 </h1>

 <form action="exercicio2.php" method="post">
  <fieldset>
   <legend> Eleições </legend>

   <label class="alinha"> Forneça a idade da pessoa: </label>
   <input type="number" name="idade"  min="0"> 
  </fieldset>

  <button name="enviar-dados"> Está apto a votar? </button>
 </form>

 <?php

  if(isset($_POST['enviar-dados']))
   {
   $idade = $_POST['idade'];

   validarIdade($idade);

   validarVoto($idade); 
   }  
 ?> 
</body> 
</html> 