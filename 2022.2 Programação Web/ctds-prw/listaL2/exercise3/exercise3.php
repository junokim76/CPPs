<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title>Fundamentos do PHP  </title> 
  <link rel="stylesheet" href="formata-formulario.css">  
</head> 

<body> 
  <h1>Fundamentos do PHP - Lista L2 - Exercício 3 - Resposta do Servidor</h1>
    <?php
    //recebendo os dados do navegador
    $nota1 = $_POST['nota1'];
    $nota2 = $_POST['nota2'];
    $nota3 = $_POST['nota3'];
    
    $aluno1 = $_POST["aluno1"];
    $aluno2 = $_POST["aluno2"];
    $aluno3 = $_POST["aluno3"];
    
    //criando vetor de indice associativo
    $vetorNotas[$aluno1] = $nota1;
    $vetorNotas[$aluno2] = $nota2;
    $vetorNotas[$aluno3] = $nota3;
    //Outra Forma
    /*   $vetorNotas = [$aluno1 => $nota1, $aluno2 => $nota2, $aluno3 => $nota3];   */

    //mais uma outra forma
    /* $vetorNotas = array($aluno1 => $nota1, $aluno2 => $nota2, $aluno3 => $nota3);*/ 
    //mostra resultado array 
    
    //DEBUG
/*  echo "<pre>";
    print_r($vetorNotas);
    echo "</pre>";
*/

//vamos ordenar esse vetor pelo valor da nota de cada aluno, não pode ter a letra k no nome da função mantendo a asspciação entre nota e aluno (tem que ter a letra a ), em ordem descrescente de nota (letra r). */ 

/* arsort($vetorNotas);
echo "<pre>";
  print_r($vetorNotas);
echo "</pre>"; */

    //mostrando os dados no formato tabulado. Mandamos o navegador criar o cabeçalho da tabela, via PHP
    echo "<table>
          <caption><span> Relação de alunos e suas notas de PRW no semestre 2022/2 </span></caption>
          <tr>
            <th> Nome do aluno </th>
            <th> Nota do aluno </th>
          </tr>";
          //para que o PHP percorra o vetor usamos o laço pronto foreach  
          foreach ($vetorNotas as $aluno => $nota){
            echo "<tr>
                    <td> $aluno </td>
                    <td> $nota</td>
                  </tr>";
          } 
          
          echo "</table>";
          
          echo "<p>O valor da maior nota é => ", $maiorNota= max($vetorNotas); /*, $nomeAluno = max($vetorNotas, */
          /*echo "<p>O valor da maior nota é => ", $maiorNota= array_search(9,$maiorNota);*/
          //retorna nome do aluno de maior nota  array_search
          $alunoMaiorNotamaior = array_search ($maiorNota, $vetorNotas);

          echo " do aluno(a) ", $alunoMaiorNotamaior, "!!!"
          
          
    ?>

</body> 
</html> 
