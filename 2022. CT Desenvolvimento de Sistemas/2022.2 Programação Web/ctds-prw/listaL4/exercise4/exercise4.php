<!DOCTYPE html>
    <html lang="pt-BR"> 
    <head> 
      <meta charset="utf-8"> 
      <title>Modularização de código em PHP</title> 
      <link rel="stylesheet" href="../../css/formata-formulario.css">  
    </head> 
    
    <body> 
      <h1>PHP Temperatura - Lista L4 - Exercise 4</h1>
      <form action="exercise4.php" method="POST">
          
        <fieldset>
          <legend>Lojas do sr Antonio</legend> 
          
          <label class="alinha">Forneça o valor inicialda compra</label>
          <input type="number" name="valor-compra" step="0.01"><br>  
          
          <label class="alinha">Comissao (em %)</label>
          <input type="number" name="percentual-comissao" step="0.1"><br>  
          
          <input type="checkbox" name="fidelidade"><label > Pagamnto com Cartão Fidelidade </label><br><br> 
          </fieldset>

        <button name="enviar-dados">Processar Venda</button><br><br>
       
      </form>
<?php

if(isset($_POST['enviar-dados'])){
  $valorCompra = $_POST['valor-compra'];
  $percentComissao = $_POST['percentual-comissao'];

  //printf($valorCompra);
  //printf($percentComissao);
  
  $valorComissao - calculaValorComissao ($valorCompra, $percentComissao);
  $valorDesconto = calculaValorDesconto($valorCompra);

  echo ("<p> $valorComissao <br></p>");
  echo ("<p> $valorDesconto <br></p>");
  echo $valorFinalCompra;
}

?>

</body> 
</html>

<?php
   function calculaValorComissao($valorCompra, $percentualComissao){
    $comissao = $valorCompra * $percentualComissao/100;
    return $comissao;
   }
   //=============================================================
   function calculaValorDesconto($valorCompra){
    define("TAXA_DESCONTO", 5/100);
    $desconto = 0;
    $temDesconto = isset($_POST['fidelidade']);
    if($temDesconto){
      $desconto = $valorCompra * TAXA_DESCONTO;
    }
    return $desconto;
   }
   //=============================================================
   function valorFinalCompra ($valorCompra, $valorDesconto){
    $valorFinalCompra = $valorCompra - $valorDesconto;
    return $valorFinalCompra;
   }
?>

