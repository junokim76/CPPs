<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> PHP Fundamentals </title> 
  <link rel="stylesheet" href="formata-formulario.css">
</head> 

<body>
 <h1> PHP Fundamentals- listL1 - exercise 8 - server return</h1>

	 <?php
	 define("TAXA_DESCONTO", 5/100);
	 define("TAXA_ENTREGA",2/100);
	 //Testa se vem dados
	 $validaEntradaRadio = isset($_POST ['descPagamento']);
	 $validaEntradaCheck = isset($_POST ['entregaDomicilio']);
	 
	  //testa o que foi marcado
	  if($validaEntradaCheck == false){
		$entregaDomicilio = 0;
		} else {
			$entregaDomicilio = $_POST['entregaDomicilio'];
		}


	 if($validaEntradaRadio == false){
		//echo ;
		exit("<p>AVISO: Favor selecione uma opção! <br>
		!!! Aplicação Encerrada !!!
		</p>"); //or die
	 }
		
	 //Recebe Valor da compra
	 $valorTotalCompra = $_POST['valorTotalCompra'];
	 $descPagamento = $_POST ['descPagamento'];
	 $nomeCliente = $_POST ['nomeCliente'];
	
	 
	
	 //Calcula valor de desconto de entrega de compra
		$descCompraCliente = $valorTotalCompra * $descPagamento;
		$cobraEntrega = $valorTotalCompra * $entregaDomicilio;
		$valorCompraTotalDesc = $valorTotalCompra - $descCompraCliente;
		$valorCompraComEntrega = $valorCompraTotalDesc + $cobraEntrega;

	 echo "<p> Mercadinho da VOVÓ - Bem Vindo(a) !!! <span> $nomeCliente</span><br> <br>
			<span> Valor Total da Compra: R$ $valorTotalCompra </span><br>
			- Valor do desconto para o cliente = <span> R$$descCompraCliente </span> <br>
			- Valor da entrega compra do cliente no valor de <span> R$$cobraEntrega </span> <br>
			- Valor da Compra com Desconto => <span> R$$valorCompraTotalDesc </sapn> <br> 
			- Valor da Compra Total => <span> R$$valorCompraComEntrega </span> <br> <br>

			
			- Mostra entrada Radio => $validaEntradaRadio <br>
			- Mostra entrada check => $validaEntradaCheck <br>
			- Mostra desconto Forma Pagamento =>  $descPagamento <br>
			- Mostra entrega em domicilio => $entregaDomicilio <br>

			</p>"; 
	 ?>
</body> 
</html> 