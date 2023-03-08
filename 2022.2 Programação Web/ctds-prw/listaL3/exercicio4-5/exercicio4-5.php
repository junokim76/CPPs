<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Matrizes em PHP </title> 
  <link rel="stylesheet" href="formata-formulario.css">
</head> 

<body> 
 <h1> Matrizes em PHP - listaL3 - exercício 4-5 </h1>

 <form action="exercicio4-5.php" method="post">
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

    <label class="alinha"> Forneça a matrícula de um aluno para pesquisa: </label>
    <input type="text" name="pesquisa-matricula">
   </fieldset>
   
   <button name="enviar-dados"> Mostrar dados do aluno pesquisado </button>
  </fieldset>
 </form>
 <!--quando misturamos código em PHP no mesmo arquivo em que está o formulário, o comum é inserirmos este código logo abaixo do fechamento do formulário-->

 <?php
   if(isset($_POST['enviar-dados']))
   {
   $nota1       = $_POST['nota1'];
   $nota2       = $_POST['nota2'];
   $nota3       = $_POST['nota3'];

   $nome1       = $_POST["aluno1"];
   $nome2       = $_POST["aluno2"];
   $nome3       = $_POST["aluno3"];

   $matric1     = $_POST["matric1"];
   $matric2     = $_POST["matric2"];
   $matric3     = $_POST["matric3"];


   $matrizAlunos = [$matric1 => [$nome1, $nota1],
                   $matric2 => [$nome2, $nota2],
                   $matric3 => [$nome3, $nota3]];

   $matriculaPesquisada = $_POST['pesquisa-matricula'];

   //buscando o índice do aluno pesquisado diretamente na matriz, sem a necessidade de usar o laço foreach, nem a necessidade de se criar um vetor auxiliar
   $encontrouMatricula = array_key_exists($matriculaPesquisada, $matrizAlunos);


    if(!$encontrouMatricula)
     {
     echo "<p> A matrícula pesquisada, <span> $matriculaPesquisada </span>, não está cadastrada na matriz. </p>";
     }
    else
     {
     $notaAlunoPesquisado = $matrizAlunos[$matriculaPesquisada][1];
     $nomeAlunoPesquisado = $matrizAlunos[$matriculaPesquisada][0];

     echo "<p> Dados do aluno pesquisado: <br>
               Nome = <span> $nomeAlunoPesquisado </span> <br>
               Matrícula = <span> $matriculaPesquisada </span> <br>
               Nota de PRW = <span> $notaAlunoPesquisado </span> </p>";
     }
   }
 ?>
 
</body> 
</html> 