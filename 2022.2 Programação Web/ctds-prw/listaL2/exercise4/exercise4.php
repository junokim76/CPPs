<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title>Fundamentos do PHP  </title> 
  <link rel="stylesheet" href="formata-formulario.css">  
</head> 

<body> 
  <h1>Fundamentos do PHP - Lista L2 - Exercício 4 - Resposta do Servidor</h1>
    <?php
            //criando um vetor com indice numerico, catalogar o nome do produto 
            $vetorPreco =["Cerveja" => 8.00, "Livro" => 100.00, "Pizza" => 90.50];
            //testando se não tem check
            if(!isset($_POST['produtos'])){
              exit ("<p>Selecione um produto para prosseguir (carrinho vazio)! Clique em voltar ... <p>");
            }
            //PHP recebe produtos
            $vetorProdutoComprados = $_POST ['produtos'];
            
             //Debug Vetor
            /* echo "<pre>";
            print_r($vetorProdutoComprados);
            echo "</pre>";
            */

            //Inicialização da Soamtoria
            $totalComprado = 0;
            foreach($vetorProdutoComprados as $nomeProduto){
              $totalComprado = $totalComprado + $vetorPreco[$nomeProduto];
            }
            //mostra a lista de produtos comprados
            echo "<p> Lista de Produtos Comprados <br>";
            foreach($vetorProdutoComprados as $nomeProduto){
              echo "=> $nomeProduto <br>";
            }
            
           
           
            $totalFormatado = number_format($totalComprado, 2, "," , ".");
            echo "O total da compra é :<span> $totalFormatado </span>"
    ?>

</body> 
</html> 
