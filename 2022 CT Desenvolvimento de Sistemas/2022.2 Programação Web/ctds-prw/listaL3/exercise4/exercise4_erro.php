<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title>PHP Join HTML  </title> 
  <link rel="stylesheet" href="../../css/formata-formulario.css">  
</head> 

<body> 
  <h1>PHP Matrizes - Lista L3 - Exercise 4</h1>
  <form action="exercise4_erro.php" method="POST">
    <fieldset>
      <legend> Modulo de Pesquisa de aluno </legend>
      <label class="alinha"> Pesquisar </label>
      <input type="text" name="pesquisa-aluno">
    </fieldset>
   
    <fieldset>
      <legend>Rendimento Semestral do Aluno</legend> 
      
      <label class="alinha"> Nome do aluno </label>
      <input type="text" name="aluno1" autofocus placeholder="Seu nome aqui..."><br>
      <label class="alinha"> Matricula do Aluno</label>
      <input type="text" name="matric1"><br>
      <label class="alinha">Nota de PRW</label>
      <input type="number" name="nota1" min="0" max="10" step="0.1"><br>
    </fieldset>
      
    <fieldset>
      <legend>Rendimento Semestral do Aluno</legend> 
      <label class="alinha"> Nome do aluno </label>
      <input type="text" name="aluno2" placeholder="Seu nome aqui..."><br>
      <label class="alinha"> Matricula do Aluno</label>
      <input type="text" name="matric2"><br>
      <label class="alinha">Nota de PRW</label>
      <input type="number" name="nota2" min="0" max="10" step="0.1"><br>
    </fieldset>

    <fieldset>
      <legend>Rendimento Semestral do Aluno</legend> 
      <label class="alinha"> Nome do aluno </label>
      <input type="text" name="aluno3" placeholder="Seu nome aqui..."><br>
      <label class="alinha"> Matricula do Aluno</label>
      <input type="text" name="matric3"><br>
      <label class="alinha">Nota de PRW</label>
      <input type="number" name="nota3" min="0" max="10" step="0.1"><br>
    </fieldset>

    <button name="enviar-dados">Calcular Media Final do aluno</button>
    </fieldset>
   </form>
    <!-- O PHP começa aqui !!! 
    <?php
    //recebendo os dados do navegador
    //Solução para html com PHP no mesmo arquivo - resovendo o post vazio 
    //if(isset($_POST['enviar-dados'])) {
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

    $alunoPesquisado = $_POST['pesquisa-aluno'];


    //----------------------------------------------------------------
    foreach($matrizAlunos as $matric => $vetorInterno){
    $vetorTemporarioNotas[$matric] = $vetorInterno[1];
    }

    $media = array_sum($vetorTemporarioNotas) / count ($vetorTemporarioNotas);
    $maiorNota = max($vetorTemporarioNotas);
    $matricAlunoMaiorNota = array_search($maiorNota, $vetorTemporarioNotas);
    $nomeAlunoMaiorNota = $matrizAlunos[$matricAlunoMaiorNota][0];
    
    
    //DEBUG
    echo "<pre>";
    print_r($matrizAlunos);
    echo "</pre>";
    
    echo "<pre>";
    print_r($vetorTemporarioNotas);
    echo "</pre>";

     echo "<pre>";
        print_r($nomeAlunoMaiorNota);
      echo "</pre>";
    
      //maior nota, junto com a matricula e nome
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
                    <td> $nota </td>
                  </tr>";
          } 
            echo "</table>";

            echo "<p> Dados do aluno com maior nota em PRW na matriz: <br>
            Matricula = <span> $matricAlunoMaiorNota </span><br>
            Aluno = <span> $nomeAlunoMaiorNota </span><br>
            Nota = <span> $maiorNota </span></p>";        
    //}  
    ?>


  </body> 
</html> 
