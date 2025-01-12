<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> PHP Fundamentals </title> 
  <link rel="stylesheet" href="formata-formulario.css">
</head> 

<body>
 <h1> PHP Fundamentals- listL1 - exercise 9 - server return</h1>

	 <?php
	 define("TAXA_DESCONTO", 5/100);
	 define("TAXA_ACRESCIMO",2/100);
	 //Testa se vem dados
	 $validaEntradaRadio = isset($_POST ['tipoPagamento']);
	 $validaEntradaCheck = isset($_POST ['concorreSorteio']);
	 
/*		if($validaEntradaRadio == false){
			//echo ;
			exit("<p>AVISO: Favor selecione uma opção! <br>
			!!! Aplicação Encerrada !!!
			</p>"); //or die
		}
*/		
//BOAS VINDAS
echo "<br><p>Mercadinho da VOVÓ - Bem Vindo(a) !!! <span> $nomeCliente</span></p><br>";
	 //Recebe Valor das variaveis
	 $valorTotalCompra = $_POST['valorTotalCompra'];
	 $tipoPagamento = $_POST ['tipoPagamento'];
	 $nomeCliente = $_POST ['nomeCliente'];
	 $concorreSorteio = $_POST ['concorreSorteio'];
	
	if ($tipoPagamento == 0.05){
		echo "<p> Você recebeu um desconto! </p><br><br>";
		$descontoCompra = $valorTotalCompra * $tipoPagamento;
		$compraCliente = $valorTotalCompra - $descontoCompra;
		$acrescimoCompra = 0;
	} else {
		echo"<p> Você terá um acrescimo na sua compra </p>";
		$acrescimoCompra = $valorTotalCompra * $tipoPagamento;
		$compraCliente = $valorTotalCompra + $acrescimoCompra;
		$descontoCompra = 0;
	}

	if($concorreSorteio){
		$msg =  "<p>Boa Sorte :D  - Você está concorrendo ao nosso sorteio!!!";
	}else{
		
		$msg =	"<p> Que Pena :(... - Na próxima compra tente concorrer conosco! ";
	}

	 echo "	<p><span> Valor Total da Compra: R$ $valorTotalCompra </span><br>
			- Valor do desconto para o cliente = <span> R$$descontoCompra </span> <br>
			- Valor do acrescimo para o cliente = <span> R$$acrescimoCompra </span> <br>
			- Valor da Total Compra  => <span> R$$compraCliente </sapn> <br> 
			- <span> $msg </span> <br><br>

			
			- Mostra entrada Radio => $validaEntradaRadio <br>
			- Mostra entrada check => $validaEntradaCheck <br>
			- Mostra tipo do Pagamento =>  $tipoPagamento <br>
			- Concorre a sorteio? => $concorreSorteio <br>

			</p>"; 
	 ?>
</body> 
</html> 