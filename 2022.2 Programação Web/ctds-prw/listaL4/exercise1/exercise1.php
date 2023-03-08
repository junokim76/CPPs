<?php
  //Declaração da Função
  function validarCamposFormulario($nome, $nota1, $nota2){
      //validar oform nome, sempre que receber caixa de texto, elimine os espações em branco entre o primeiro caracter valido e após o ultimo caracter valido
    $nome = trim($nome);
    //Testa o valor null
    $estaVazio = empty($nome);
    if ($estaVazio){
      exit ("<p>O campo <span>Nome </sapn>deve ser preenchido! Aplicação Encerrada...</p>");
    }
    $nota1 = filter_var($nota1, FILTER_VALIDATE_FLOAT);
    $nota2 = filter_var($nota2, FILTER_VALIDATE_FLOAT);
    //função filter_var retorna false ou o proprio valor
    //$zero = true;
    //$nota1 = $zero;
    //COMPARAÇÃO DE VARIAVEL ZERO COM O FALSO USA-SE O === !!!
    if ($nota1 === false || $nota2 === false || $nota1 < 0 || $nota2 < 0 || $nota1 > 10 || $nota2 > 10){
      die ("<p>O valor fornecido está incorreto!!! (vazio, ou < 0 ou > 10 </p>");
    }
    /* echo "<br>";
    print_r($nome);
    echo "<br>";
    echo "<br>";
    print_r($nota1);
    echo "<br>";
    print_r($nota2);
    */
  }
  //============================================================
  function calcularMedia ($n1, $n2){
    $media = ($n1 + $n2)/2;
    return $media;
  }
  //============================================================
  function mostrarSituacaoAluno($aluno, $media){
    if ($media >=6){
      $mediaFormatada = number_format($media, 1, "," , "." );
      echo"<p><span> $aluno, você foi APROVADO(A)! </span> com media <span>$mediaFormatada</span>";
    }else {
      $mediaFormatada = number_format($media, 1, "," , "." );
      echo"<p><span> $aluno, você foi  REPROVADO(A)! </span> com media <span>$mediaFormatada</span>";
    }
  }


?>
<!DOCTYPE html>
    <html lang="pt-BR"> 
    <head> 
      <meta charset="utf-8"> 
      <title>Modularização de código em PHP</title> 
      <link rel="stylesheet" href="../css/formata-formulario.css">  
    </head> 
    
    <body> 
      <h1>PHP Matrizes - Lista L4 - Exercise 1</h1>
      <form action="exercise1.php" method="POST">
          
        <fieldset>
          <legend>Rendimento Semestral do Aluno</legend> 
          <label class="alinha"> Nome do aluno </label>
          <input type="text" name="aluno" autofocus placeholder="Seu nome aqui..."><br>
          <label class="alinha"> Matricula do Aluno</label>
          <input type="text" name="matric1"><br>
          <label class="alinha">Nota1 de PRW</label>
          <input type="text" name="nota1" min="-100000" max="10" step="0.1"><br>
          <label class="alinha">Nota2 de PRW</label>
          <input type="text" name="nota2" min="-10000" max="10" step="0.1"><br>
        </fieldset>
          
        <button name="enviar-dados">Calcular Media Final do aluno</button><br><br>
        </fieldset>
      </form>
<?php
    
  if(isset($_POST['enviar-dados'])) {
     //recebendo os dados do navegador
    //PROGRAMA PRINCIPAL
    //INVOCAR A FUNÇÃO DE TESTE DO FORMULARIO, ESTA FUNÇÃO NÃO TERÁ VALOR DE RETORNO. SE HOUVER ERRO A FUNÇÃO MOSTRA A MSG E ENCERRA A APLICAÇÃO.
    //receber os dados do formulario
    $nome = $_POST['aluno'];
    $nota1 = $_POST['nota1'];
    $nota2 = $_POST['nota2'];
    validarCamposFormulario($nome, $nota1, $nota2);
    //Invocar a função que calcula a media do aluno, retornando a media na variavel $mediaRetornada
    $mediaRetornada = calcularMedia($nota1, $nota2);
    
    //vamos invocar a função que recebe a media e o nome do aluno e sua stiação
    mostrarSituacaoAluno($nome, $mediaRetornada);

   
    


  }
?>

</body> 
</html>