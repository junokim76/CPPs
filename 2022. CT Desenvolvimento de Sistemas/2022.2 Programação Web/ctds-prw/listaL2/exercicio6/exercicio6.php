<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Fundamentos do PHP </title> 
  <link rel="stylesheet" href="formata-formulario.css">

</head> 

<body> 
 <h1> Fundamentos do PHP - Vetores - listaL2 - exercício 6 - resposta do servidor </h1>

 <?php
  $idade1      = $_POST['idade1'];
  $idade2      = $_POST['idade2'];
  $idade3      = $_POST['idade3'];

  $nome1       = $_POST["pessoa1"];
  $nome2       = $_POST["pessoa2"];
  $nome3       = $_POST["pessoa3"];

  $vetorPessoas = array($nome1 => $idade1, 
                        $nome2 => $idade2, 
                        $nome3 => $idade3);

  echo "<table>
         <caption> Relação de pessoas e suas idades </caption>
         <tr>
          <th> Nome da pessoa </th>
          <th> Idade da pessoa </th>
         </tr>";

  foreach($vetorPessoas as $nome => $idade)
   {
   echo "<tr>
          <td> $nome </td>
          <td> $idade </td>
         </tr>";
   }

  echo "</table>";

  $menorIdade = min($vetorPessoas);

  $nomePessoaMaisNova = array_search($menorIdade, $vetorPessoas);

  echo "<p> Dados da pessoa mais nova: <br>
         Nome = <span> $nomePessoaMaisNova </span> <br>
         Idade = <span> $menorIdade </span> </p>";
 ?>
</body> 
</html> 