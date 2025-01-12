<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Matrizes em PHP </title> 
  <link rel="stylesheet" href="formata-formulario.css">
</head> 

<body> 
 <h1> Matrizes em PHP - listaL3 - exercício 4 </h1>

 <form action="exercicio4.php" method="post">
  <!--dados do aluno 1-->
  <fieldset>
   <legend> Rendimento semestral do aluno - CTDS - PRW </legend>

   <label class="alinha"> Nome do aluno: </label>
   <input type="text" name="aluno1" autofocus> <br>

   <label class="alinha"> Matrícula do aluno: </label>
   <input type="text" name="matric1"> <br>

   <label class="alinha"> Nota de PRW: </label>
   <input type="number" name="nota1" min="0" max="10" step="0.1"> <br>
  </fieldset>

  <!--dados do aluno 2-->
   <fieldset>
      <legend> Rendimento semestral do aluno - CTDS - PRW </legend>
   
      <label class="alinha"> Nome do aluno: </label>
      <input type="text" name="aluno2"> <br>
   
      <label class="alinha"> Matrícula do aluno: </label>
      <input type="text" name="matric2"> <br>
   
      <label class="alinha"> Nota de PRW: </label>
      <input type="number" name="nota2" min="0" max="10" step="0.1"> <br>
     </fieldset>

   <!--dados do aluno 3-->
   <fieldset>
    <legend> Rendimento semestral do aluno - CTDS - PRW </legend>
 
    <label class="alinha"> Nome do aluno: </label>
    <input type="text" name="aluno3"> <br>
 
    <label class="alinha"> Matrícula do aluno: </label>
    <input type="text" name="matric3"> <br>
 
    <label class="alinha"> Nota de PRW: </label>
    <input type="number" name="nota3" min="0" max="10" step="0.1"> <br>
   </fieldset>

   <fieldset>
    <legend> Módulo de pesquisa de aluno </legend>

    <label class="alinha"> Forneça o nome de um aluno para pesquisa: </label>
    <input type="text" name="pesquisa-aluno">
   </fieldset>
   
   <button name="enviar-dados"> Mostrar dados do aluno pesquisado </button>
  </fieldset>
 </form>
 <!--quando misturamos código em PHP no mesmo arquivo em que está o formulário, o comum é inserirmos este código logo abaixo do fechamento do formulário-->

 <?php
  //quando inserimos código em PHP que trata dados de um formulário no mesmo arquivo com as tags html, devemos usar um comando da linguagem, que somente permita a execução de código em PHP após o botão submit ter sido clicado no formulário
  if(isset($_POST['enviar-dados']))
   {
   $nota1       = $_POST['nota1'];
   $nota2       = $_POST['nota2'];
   $nota3       = $_POST['nota3'];

   $nome1       = $_POST["aluno1"];
   $nome2       = $_POST["aluno2"];
   $nome3       = $_POST["aluno3"];

   //converter todos os nomes para caixa alta
   $nome1 = strToUpper($nome1);
   $nome2 = strToUpper($nome2);
   $nome3 = strToUpper($nome3);

   $matric1     = $_POST["matric1"];
   $matric2     = $_POST["matric2"];
   $matric3     = $_POST["matric3"];


   $matrizAlunos = [$matric1 => [$nome1, $nota1],
                   $matric2 => [$nome2, $nota2],
                   $matric3 => [$nome3, $nota3]];

  //converter o nome do aluno pesquisado para caixa alta
   $alunoPesquisado = $_POST['pesquisa-aluno'];
   $alunoPesquisado = strToUpper($alunoPesquisado);

   //para descobrirmos se o número da matrícula pesquisado está na matriz, devemos criar um vetor temporário, armazenando o nome do aluno como o seu conteúdo e o número da matrícula como seu índice. Após isso, usamos as funções de busca do PHP em vetores para verificarmos se o nome fornecido está presente no vetor temporário
 
   foreach($matrizAlunos as $matric => $vetorInterno)
    {
    $vetorTemp[$matric] = $vetorInterno[0] ;  
    }

    $matriculaAlunoPesquisado = array_search($alunoPesquisado, $vetorTemp);

    if(!$matriculaAlunoPesquisado)
     {
     echo "<p> O aluno pesquisado, de nome <span> $alunoPesquisado </span>, não está cadastrado na matriz. </p>";
     }
    else
     {
     //basta irmos até a matriz,  localizar o aluno pela sua matrícula e buscar a sua nota de PRW
     $notaAlunoPesquisado = $matrizAlunos[$matriculaAlunoPesquisado][1];

     echo "<p> Dados do aluno pesquisado: <br>
               Nome = <span> $alunoPesquisado </span> <br>
               Matrícula = <span> $matriculaAlunoPesquisado </span> <br>
               Nota de PRW = <span> $notaAlunoPesquisado </span> </p>";
     }
   }
 ?>
 
</body> 
</html> 