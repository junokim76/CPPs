<?php
 //declaração da função
 function validarcampos($nome, $nota1, $nota2)
  {

  //vamos aos comandos de validação do nome - sempre que voc~e receber dados de uma caixa de texto, mande o PHP eliminar os espaços em branco antes do primeiro caracter válido e após o último caracter válido
  $nome = trim($nome);

  //por fim, após eliminarmos todos os espaços em branco inválidos, testamos se o nome resta vazio
  $estaVazio = empty($nome);

  if($estaVazio)
   {
   exit("<p> O campo nome deve ser preenchido. Aplicação encerrada! </p>");
   }

  //vamos validar os dois campos numéricos
  $nota1 = filter_var($nota1, FILTER_VALIDATE_FLOAT);
  $nota2 = filter_var($nota2, FILTER_VALIDATE_FLOAT);

  //a função filter_var() retorna dois valores possíveis. No caso de um dado errado, ela retorna false. Se o valor testado está correto, ela retorna o próprio valor
  //ATENÇÃO: CUIDADO COM A COMPARAÇÃO DO VALOR DE UMA VARÍAVEL EM RELAÇÃO AO FALSO. PARA EVITARMOS AS "ARMADILHAS" DO PHP EM RELAÇÃO AO ZERO, SEMPRE USAREMOS, DAQUI POR DIANTE, O OPERADOR DE IDENTIDADE (===)

  if($nota1 === false OR $nota2 === false OR $nota1 < 0 OR $nota2 < 0 || $nota1 > 10 OR $nota2 > 10)
   {
   exit("<p> O valor fornecido fornecido para a nota do aluno está incorreto. Aplicação encerrada! </p>");
   }
  }

  //==========================================================================

  function calcularMedia($n1, $n2)
   {
   $media = ($n1 + $n2) / 2;
   return $media; 
   }

  //=========================================================================

  function mostrarSituacaoAluno($aluno, $media)
   {
   if($media >= 6)
    {
    $situacao = "APROVADO";  
    }
   else
    {
    $situacao = "REPROVADO";
    }  
    
    $mediaFormatada = number_format($media, 1, ",", ".");
    echo "<p> Caro aluno <span> $aluno, </span>, de acordo com suas notas em PRW, você foi considerado $situacao, com média final igual a <span> $mediaFormatada </span> </p>";
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
 <h1> Funções de usuário em PHP - listaL4 - exercício 1 </h1>

 <form action="exercicio1.php" method="post">
  <fieldset>
   <legend> Rendimento semestral do aluno - CTDS - PRW </legend>

   <label class="alinha"> Nome do aluno: </label>
   <input type="text" name="aluno" autofocus> <br>

   <label class="alinha"> Nota1 de PRW: </label>
   <input type="number" name="nota1"  min="0" max="10" step="0.1"> <br>

   <label class="alinha"> Nota2 de PRW: </label>
   <input type="number" name="nota2" min="0" max="10" step="0.1">
  </fieldset>

  <button name="enviar-dados"> Calcular média e validar dados </button>
 </form>

 <?php

  if(isset($_POST['enviar-dados']))
   {
   //script principal
   //invocar a função de teste dos dados do formulário - esta função não terá valor de retorno. Se houver algum erro detectado, a função mostra uma mensagem e encerra a aplicação
  //recebendo os dados do formulário
   $nome = $_POST["aluno"];
   $nota1 = $_POST['nota1'];
   $nota2 = $_POST['nota2'];

   validarCampos($nome, $nota1, $nota2);

   //vamos invocar a função que calcula a média do aluno, retornando esta média na variável $mediaRetornada
   $mediaRetornada = calcularMedia($nota1, $nota2);

   //vamos invocar a função que recebe a média e o nome do aluno e mostra se o mesmo foi aprovado ou não
   mostrarSituacaoAluno($nome, $mediaRetornada);
   }  
 ?> 
</body> 
</html> 