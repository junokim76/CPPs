programa
{
	funcao inicio()
	{
		inteiro N1, N2, N3, MAIOR

		escreva("Digite o primeiro numero: ")
		leia (N1)
		MAIOR = N1
		//escreva (MAIOR) - COLOQUEI DESSA FORMA PARA PODER CALCULAR OS NIMEROS NEGATIVOS
		escreva("Digite o segundo  numero: ")
		leia (N2)
		se (N2 > MAIOR){
			MAIOR = N2
		}
		//escreva (MAIOR)
		escreva("Digite o terceiro numero: ")
		leia (N3)
		se (N3 > MAIOR){
			MAIOR = N3
		}
		escreva("O maior némreo digitado foi " + MAIOR )
		
	}
}
/* $$$ Portugol Studio $$$ 
 * 
 * Esta seção do arquivo guarda informações do Portugol Studio.
 * Você pode apagá-la se estiver utilizando outro editor.
 * 
 * @POSICAO-CURSOR = 208; 
 * @PONTOS-DE-PARADA = ;
 * @SIMBOLOS-INSPECIONADOS = ;
 * @FILTRO-ARVORE-TIPOS-DE-DADO = inteiro, real, logico, cadeia, caracter, vazio;
 * @FILTRO-ARVORE-TIPOS-DE-SIMBOLO = variavel, vetor, matriz, funcao;
 */