<?php
function validarIdade($idade){
  $idade = filter_var($idade, FILTER_VALIDATE_INT);
  if($idade === false || $idade < 0){
    die ("<p> Caro usuário, favor inserir corretamente a IDADE!</P");
  }
}
function validarVoto($idade){
  if ($idade >= 16 || $idade < 0){
    echo "<p>Você está apto a votar!</p.";
  } else {
    echo "<p>Você ainda não pode votar! Espere completar 16 anos </p>";
  }
}
?>
<!DOCTYPE html>
    <html lang="pt-BR"> 
    <head> 
      <meta charset="utf-8"> 
      <title>Modularização de código em PHP</title> 
      <link rel="stylesheet" href="../../css/formata-formulario.css">  
    </head> 
    
    <body> 
      <h1>PHP Matrizes - Lista L4 - Exercise 2</h1>
      <form action="exercise2.php" method="POST">
          
        <fieldset>
          <legend>Eleições</legend> 
          
          <label class="alinha">Forneça a idade do cidadão</label>
          <input type="text" name="idade" min="0"  ><br>
         
        </fieldset>
          
        <button name="enviar-dados">Pode Votar?</button><br><br>
        </fieldset>
      </form>
<?php
    
  if(isset($_POST['enviar-dados'])) {
     //recebendo os dados do navegador
    //PROGRAMA PRINCIPAL
    //INVOCAR A FUNÇÃO DE TESTE DO FORMULARIO, ESTA FUNÇÃO NÃO TERÁ VALOR DE RETORNO. SE HOUVER ERRO A FUNÇÃO MOSTRA A MSG E ENCERRA A APLICAÇÃO.
    //receber os dados do formulario
    $idade = $_POST['idade'];
    
    validarIdade($idade);

    validarVoto($idade);


  }
?>

</body> 
</html>