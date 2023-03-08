<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Fundamentos do PHP </title> 
  <link rel="stylesheet" href="formata-formulario.css">

</head> 

<body> 
 <h1> Fundamentos do PHP - Vetores - listaL2 - exercício 3 - resposta do servidor </h1>

 <?php
  $nota1       = $_POST['nota1'];
  $nota2       = $_POST['nota2'];
  $nota3       = $_POST['nota3'];

  $nome1       = $_POST["aluno1"];
  $nome2       = $_POST["aluno2"];
  $nome3       = $_POST["aluno3"];

  $vetorNotas = [$nome1 => $nota1, 
                 $nome2 => $nota2, 
                 $nome3 => $nota3];

 //vamos ordenar este vetor, pelo valor da nota de cada aluno (não pode ter a letra k no nome da função), mantendo a associação entre nota e aluno (tem de ter a letra a), em ordem decrescente de nota (presença da letra r)
 arsort($vetorNotas);

 echo "<table>
         <caption> Relação de alunos e suas notas de PRW no semestre 2022/2 </caption>
         <tr>
          <th> Nome do aluno </th>
          <th> Nota do aluno </th>
         </tr>";

  foreach($vetorNotas as $aluno => $nota)
   {
   echo "<tr>
          <td> $aluno </td>
          <td> $nota </td>
         </tr>";
   }

  echo "</table>";  
 ?>
</body> 
</html> 