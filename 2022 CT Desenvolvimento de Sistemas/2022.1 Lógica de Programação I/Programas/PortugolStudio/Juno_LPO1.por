programa
{
	inteiro count=1, N, R
	
	funcao inicio()
	
	{
		escreva ("\nDigite número de repetições: ")
		leia (R)
		
		enquanto (count <= R) {
		
		escreva ("\nDigite um número: ")
		leia (N)
				
		N=(N % 2) 
		
			se  (N == 0)
				escreva ("Esse número é PAR.\n")
			senao { 
				escreva ("Esse número é IMPAR\n")
			}
			//escreva(count," - Olá Mundo\n")
			//se  (N == 0) {
			//escreva ("O zero é um número NEUTRO!")
			//}
		count ++
		//escreva (R)
		escreva ("\n")
		}
	
	}
}

/* $$$ Portugol Studio $$$ 
 * 
 * Esta seção do arquivo guarda informações do Portugol Studio.
 * Você pode apagá-la se estiver utilizando outro editor.
 * 
 * @POSICAO-CURSOR = 445; 
 * @PONTOS-DE-PARADA = ;
 * @SIMBOLOS-INSPECIONADOS = ;
 * @FILTRO-ARVORE-TIPOS-DE-DADO = inteiro, real, logico, cadeia, caracter, vazio;
 * @FILTRO-ARVORE-TIPOS-DE-SIMBOLO = variavel, vetor, matriz, funcao;
 */