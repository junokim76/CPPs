<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Fundamentos do PHP </title> 
  <link rel="stylesheet" href="formata-formulario.css">

</head> 

<body> 
 <h1> Fundamentos do PHP - Vetores - listaL2 - exercício 2 - resposta do servidor </h1>

 <?php
  //Fazendo o PHP receber os dados trazidos da máquina cliente pelo navegador
  $nota1       = $_POST['nota1'];
  $nota2       = $_POST['nota2'];
  $nota3       = $_POST['nota3'];

  $nome1       = $_POST["aluno1"];
  $nome2       = $_POST["aluno2"];
  $nome3       = $_POST["aluno3"];

  //criando o vetor de índice associativo
  $vetorNotas[$nome1] = $nota1;
  $vetorNotas[$nome2] = $nota2;
  $vetorNotas[$nome3] = $nota3;

  //outra forma
  $vetorNotas = [$nome1 => $nota1, 
                 $nome2 => $nota2, 
                 $nome3 => $nota3];

  //outra forma
  $vetorNotas = array($nome1 => $nota1, 
                      $nome2 => $nota2, 
                      $nome3 => $nota3);

  /*echo "<pre>";
  print_r($vetorNotas);
  echo "</pre>";*/

  //mostrando os dados no formato tabular. Mandamos o navegador criar o cabeçalho da tabela, via comando echo do PHP

  echo "<table>
         <caption> Relação de alunos e suas notas de PRW no semestre 2022/2 </caption>
         <tr>
          <th> Nome do aluno </th>
          <th> Nota do aluno </th>
         </tr>";

  //para que o nosso código em PHP percorra o vetor já pronto, retire os seus dados (aluno e nota) e envie estes dados para que o navegador os exiba no corpo da tabela da página web, usamos um laço pronto que a linguagem PHP nos oferece: o foreach
  foreach($vetorNotas as $aluno => $nota)
   {
   echo "<tr>
          <td> $aluno </td>
          <td> $nota </td>
         </tr>";
   }

  echo "</table>";

  //para descobrirmos a maior nota no vetor, usamos a função max() do PHP
  $maiorNota = max($vetorNotas);

  //para o PHP retornar o nome do aluno que tem a maior nota, usamos a função array_search()
  $alunoMaiorNota = array_search($maiorNota, $vetorNotas);

  echo "<p> Dados do aluno de maior desempenho em PRW, na turma: <br>
         Nome deste aluno = <span> $alunoMaiorNota </span> <br>
         Nota deste aluno = <span> $maiorNota </span> </p>";
 ?>
</body> 
</html> 