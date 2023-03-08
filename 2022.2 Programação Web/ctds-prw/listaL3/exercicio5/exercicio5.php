<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Matrizes em PHP </title> 
  <link rel="stylesheet" href="formata-formulario.css">
</head> 

<body> 
 <h1> Matrizes em PHP - listaL3 - exercício 5 </h1>

 <form action="exercicio5.php" method="post">
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
   
   <button name="enviar-dados"> Ordenar os dados da matriz </button>
  </fieldset>
 </form>

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

   //para ordenarmos a matriz pela nota de PRW de cada aluno, vamos criar um vetor temporário, tendo, como conteúdo, a nota do aluno, e como índice, a sua matrícula, a partir do laço foreach
   foreach ($matrizAlunos as $matric => $vetorInterno)
    {
    $vetorNotas[$matric] = $vetorInterno[1];
    }

   //vamos aplicar a função que ordena o conteúdo deste vetor, pela nota, decrescentemente, mantendo a associação entre índice (matrícula) e o valor (nota) do vetor
   arsort($vetorNotas);

   echo "<table>
          <caption> Rendimento dos alunos cadastrados na matriz, ordenado, decrescentemente, pela nota de PRW </cpation>
          <tr>
           <th> Matrícula </th>
           <th> Nome </th>
           <th> Nota de PRW </th>
          </tr>";

   //vamos percorrer o vetor, já ordenado, com foreach, e retirar os dados, para enviá-los ao navegador, a fim de que sejam mostrados no formato tabular
   foreach($vetorNotas as $matric => $notaPRW)
    {
    $aluno = $matrizAlunos[$matric][0];
    echo "<tr>
           <td> $matric </td>
           <td> $aluno </td>
           <td> $notaPRW </td>
          </tr>";
    }
   echo "</table>";
  }
 ?>
 
</body> 
</html> 