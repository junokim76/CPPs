<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title>Fundamentos do PHP  </title> 
  <link rel="stylesheet" href="formata-formulario.css">  
</head> 

<body> 
  <h1>Fundamentos do PHP - Lista L1 - Exercício 6- Server Return</h1>
    <?php
    //recebendo os dados do navegador
    $nome1 = $_POST["nome1"];
    $nome2 = $_POST["nome2"];
    $nome3 = $_POST["nome3"];
    $idade1 = $_POST["idade1"];
    $idade2 = $_POST["idade2"];
    $idade3 = $_POST["idade3"];
    
    $vetorIdade=array($nome1=>$idade1, $nome2=>$idade2, $nome3=>$idade3); 
    
    echo "<table>
          <caption> Relação das pessoas e idades </caption>
          <tr>
            <td> Nome </td>
            <td> Idade </td>
          </tr>";
          foreach($vetorIdade as $nome => $idade){
            echo "<tr>
            <td> $nome </td>
            <td> $idade </td>
          </tr>";
          }
          echo "</table>";

          $menorIdade = min($vetorIdade);
          $nomeAlunoMenorIdade = array_search($menorIdade, $vetorIdade);
          echo "<p> Dados da pessoa mais nova <br>
          Nome do Aluno(a) => $nomeAlunoMenorIdade <br>
          Nota do aluno => $menorIdade</p>";
  
    
    ?>
  
</body> 
</html> 
