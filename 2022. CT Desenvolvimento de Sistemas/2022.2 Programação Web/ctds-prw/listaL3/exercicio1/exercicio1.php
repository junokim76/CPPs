<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Matrizes em PHP </title> 
  <link rel="stylesheet" href="formata-formulario.css">
</head> 

<body> 
 <h1> Matrizes em PHP - listaL3 - exercício 1 </h1>

 <?php
  $nota1       = $_POST['nota1'];
  $nota2       = $_POST['nota2'];
  $nota3       = $_POST['nota3'];

  $nome1       = $_POST["aluno1"];
  $nome2       = $_POST["aluno2"];
  $nome3       = $_POST["aluno3"];

  $matric1     = $_POST["matric1"];
  $matric2     = $_POST["matric2"];
  $matric3     = $_POST["matric3"];

  //vamos criar a nossa matriz com os dados dos alunos oriundos do formulário. No vetor externo, a matrícula do aluno funcionará como índice associativo (I). No vetor interno, representando o nome e a nota de PRW, teremos índice numerico (J)
  $matrizAlunos = [$matric1 => [$nome1, $nota1],
                   $matric2 => [$nome2, $nota2],
                   $matric3 => [$nome3, $nota3]];


  /*echo "<pre>";
  print_r($matrizAlunos);
  echo "</pre>";*/

  //mostrando os dados no formato tabular. Mandamos o navegador criar o cabeçalho da tabela, via comando echo do PHP

  echo "<table>
         <caption> Relação de alunos e suas notas de PRW no semestre 2022/2 </caption>
         <tr>
          <th> Matrícula do aluno </th>
          <th> Nome do aluno </th>
          <th> Nota do aluno </th>
         </tr>";

  //para que o nosso código em PHP percorra a matriz, retire os seus dados (aluno, nota e matrícula) e envie estes dados para que o navegador os exiba no corpo da tabela da página web, usamos um laço pronto que a linguagem PHP nos oferece: o foreach
  foreach($matrizAlunos as $matric => $vetorInterno)
   {
   echo "<tr>
          <td> $matric </td>
          <td> $vetorInterno[0] </td>
          <td> $vetorInterno[1] </td>
         </tr>";
   }

  echo "</table>";

  /*para descobrirmos a maior nota no vetor, usamos a função max() do PHP
  $maiorNota = max($vetorNotas);

  //para o PHP retornar o nome do aluno que tem a maior nota, usamos a função array_search()
  $alunoMaiorNota = array_search($maiorNota, $vetorNotas);

  echo "<p> Dados do aluno de maior desempenho em PRW, na turma: <br>
         Nome deste aluno = <span> $alunoMaiorNota </span> <br>
         Nota deste aluno = <span> $maiorNota </span> </p>";*/
 ?>
</body> 
</html> 