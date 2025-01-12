<?php
  
?>
<!DOCTYPE html>
    <html lang="pt-BR"> 
    <head> 
      <meta charset="utf-8"> 
      <title>Modularização de código em PHP</title> 
      <link rel="stylesheet" href="../../css/formata-formulario.css">  
    </head> 
    
    <body> 
      <h1>PHP Temperatura - Lista L4 - Exercise 3</h1>
      <form action="exercise4.php" method="POST">
          
        <fieldset>
          <legend>Lojas do sr Antonio</legend> 
          
          <label class="alinha">Forneça o valor inicialda compra</label>
          <input type="number" name="valor-compra" step="0.01"><br>  
          
          <label class="alinha">Comissao (em %)</label>
          <input type="number" name="percentual-comissao" step="0.1"><br>  
          
          <input type="checkbox" name="fidelidade"><label > Pagamnto com Cartão Fidelidade </label><br><br>
          
        <button name="enviar-dados">Converter Temperatura</button><br><br>
        </fieldset>
      </form>
<?php
    
  if(isset($_POST['enviar-dados'])) {
     //recebendo os dados do navegador
    //PROGRAMA PRINCIPAL
    $temperatura = $_POST['temp'];

    validarDados($temperatura);

    $escalaEscolhida = $_POST['escala'];
    if($escalaEscolhida == "C2F"){
      convertC2F($temperatura);
    } else {
      convertF2C($temperatura);
    }


  }
?>

</body> 
</html>