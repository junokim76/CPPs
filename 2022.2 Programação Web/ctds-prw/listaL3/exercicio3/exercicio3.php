<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Matrizes em PHP </title> 
  <link rel="stylesheet" href="formata-formulario.css">
</head> 

<body> 
 <h1> Matrizes em PHP - listaL3 - exercício 3 </h1>

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


  $matrizAlunos = [$matric1 => [$nome1, $nota1],
                   $matric2 => [$nome2, $nota2],
                   $matric3 => [$nome3, $nota3]];

  //para descobrirmos a maior nota, juntamente com o nome e a matrícula do aluno cadastrado na matriz, vamos percorrer a estrutura, criar um vetor temporário, armazenando, neste, o número da matrícula como índice associativo e a nota de cada aluno como conteúdo do vetor. Após o laço, usamos a função max do PHP para descobrirmos a maior nota e acessarmos os outros dois dados restantes do aluno (matrícula e o nome)
 
  foreach($matrizAlunos as $matric => $vetorInterno)
   {
   $vetorTemporarioNotas[$matric] = $vetorInterno[1] ;  
   }

   $maiorNota = max($vetorTemporarioNotas);
   $matricAlunoMaiorNota = array_search($maiorNota, $vetorTemporarioNotas);
   $nomeAlunoMaiorNota = $matrizAlunos[$matricAlunoMaiorNota][0];

   echo "<p> Dados do aluno com maior nota em PRW na matriz: <br>
         Matrícula = <span> $matricAlunoMaiorNota </span> <br>
         Aluno = <span> $nomeAlunoMaiorNota </span> <br>
         Nota = <span> $maiorNota </span></p>";
 ?>
</body> 
</html> 