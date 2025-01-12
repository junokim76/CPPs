<?php
 function validarDados($temp)
  {
  $temp = filter_var($temp, FILTER_VALIDATE_FLOAT);

  if($temp === false)
   {
   exit("<p> Valor da temperatura inválido. Aplicação encerrada! </p>");
   }

  //testar se o botão de rádio foi marcado
  $radioMarcado = isset($_POST['escala']);

  if($radioMarcado === false)
   {
   exit("<p> Você deve selecionar uma escala termométrica para a conversão. Aplicação encerrada! </p>");
   }
  }

//=========================================================================

 function converterDeCparaF($temperatura)
  {
  $tempConvertida = ($temperatura * 9/5) + 32;
  echo "<p> Dados da conversão: <br>
            Temperatura em ºC = $temperatura ºC <br>
            Temperatura convertida em ºF = <span> $tempConvertida ºF </p>";
  }

 //========================================================================

 function converterDeFparaC($temperatura)
  {
  $tempConvertida = ($temperatura - 32) * 5/9;
  echo "<p> Dados da conversão: <br>
        Temperatura em ºF = $temperatura ºF <br>
        Temperatura convertida em ºC = <span> $tempConvertida ºC </p>";
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
 <h1> Funções de usuário em PHP - listaL4 - exercício 3 </h1>

 <form action="exercicio3.php" method="post">
  <fieldset>
   <legend> Conversão de escalas termométricas </legend>

   <label> Forneça o valor da temperatura a ser convertida: </label>
   <input type="text" name="temp" step="0.1">  <br> <br>

   <label> Escolha a escala termométrica para a conversão: </label> <br>

   <input type="radio" name="escala" value="deCparaF" id="escala1"> <label for="escala1"> Converter de Celsius para Fahrenheit </label> <br>

   <input type="radio" name="escala" value="deFparaC" id="escala2"> <label for="escala2"> Converter de Fahrenheit para Celsius </label>
  </fieldset>

  <button name="enviar-dados"> Converter temperatura </button>
 </form>

 <?php

  if(isset($_POST['enviar-dados']))
   {
   $temperatura = $_POST['temp'];

   validarDados($temperatura);

   $escalaEscolhida = $_POST['escala'];

   if($escalaEscolhida == "deCparaF")
    {
    converterDeCparaF($temperatura);
    }
   else
    {
    converterDeFparaC($temperatura);
    }
   }  
 ?> 
</body> 
</html> 