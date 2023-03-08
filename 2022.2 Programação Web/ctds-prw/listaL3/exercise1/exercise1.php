<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title>PHP Matrizes  </title> 
  <link rel="stylesheet" href="formata-formulario.css">  
</head> 

<body> 
  <h1>PHP Matrizes - Lista L3 - Exercício 1 - Server Return</h1>
    <?php
    //recebendo os dados do navegador
    $nota1 = $_POST['nota1'];
    $nota2 = $_POST['nota2'];
    $nota3 = $_POST['nota3'];
    
    $aluno1 = $_POST["aluno1"];
    $aluno2 = $_POST["aluno2"];
    $aluno3 = $_POST["aluno3"];

    $matric1 = $_POST["matric1"];
    $matric2 = $_POST["matric2"];
    $matric3 = $_POST["matric3"];

    //Outra Forma
    $matrizAlunos = [$matric1 => [$aluno1, $nota1],
                     $matric2 => [$aluno2, $nota2],
                     $matric3 => [$aluno3, $nota3]];
    //DEBUG
  echo "<pre>";
    print_r($matrizAlunos);
    echo "</pre>";

    //mostrando os dados no formato tabulado. Mandamos o navegador criar o cabeçalho da tabela, via PHP
    echo "<table>
          <caption><span> Relação de alunos e suas notas de PRW no semestre 2022/2 </span></caption>
          <tr>
            <th> Matricula do aluno </th>
            <th> Nome do aluno </th>
            <th> Nota do aluno </th>
          </tr>";
          //para que o PHP percorra o vetor usamos o laço pronto foreach  
          foreach ($matrizAlunos as $matric => [$aluno, $nota]){
            echo "<tr>
                    <td> $matric </td>
                    <td> $aluno </td>
                    <td> $nota</td>
                  </tr>";
          } 
          
          echo "</table>";
          /*
          echo "<p>O valor da maior nota é => ", $maiorNota= max($vetorNotas); /*, $nomeAluno = max($vetorNotas, */
          /*echo "<p>O valor da maior nota é => ", $maiorNota= array_search(9,$maiorNota);*/
          //retorna nome do aluno de maior nota  array_search
          /*$alunoMaiorNotamaior = array_search ($maiorNota, $vetorNotas);

          echo " do aluno(a) ", $alunoMaiorNotamaior, "!!!"
          */
          
    ?>

</body> 
</html> 
