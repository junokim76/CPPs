programa
{
	funcao inicio()
	{
		inteiro N1, N2, N3, AUX

		escreva("Digite o primeiro numero: ")
		leia (N1)
		AUX = N1
		//escreva (MAIOR) - COLOQUEI DESSA FORMA PARA PODER CALCULAR OS NIMEROS NEGATIVOS
		//escreva (N1, "\n")
		//escreva (AUX, "\n")
		escreva("Digite o segundo  numero: ")
		leia (N2)
		//escreva (N2, "\n")
		se (N2 > N1){
			AUX = N2
		} senao {
			N1 = N2
			N2 = AUX
		}
				
		//escreva (N1, "\n")
		//escreva (N2, "\n")
		//escreva (AUX, "\n")
		
		//escreva (MAIOR)
		escreva("Digite o terceiro numero: ")
		leia (N3)
		se (N1 > N3){
			AUX = N3
			N3 = N2
			N2 = N1
			N1 = AUX
		} 
		se (N2 > N3){
			AUX = N3
			N3 = N2
			N2 = AUX	
		}
		//escreva (N1, "\n")
		//escreva (N2, "\n")
		//escreva (AUX, "\n")
		escreva("Os numeros ordenados sao: ", N1, (",")  ,N2, (",") ,N3 )
		
	}
}
/* $$$ Portugol Studio $$$ 
 * 
 * Esta seção do arquivo guarda informações do Portugol Studio.
 * Você pode apagá-la se estiver utilizando outro editor.
 * 
 * @POSICAO-CURSOR = 449; 
 * @PONTOS-DE-PARADA = ;
 * @SIMBOLOS-INSPECIONADOS = ;
 * @FILTRO-ARVORE-TIPOS-DE-DADO = inteiro, real, logico, cadeia, caracter, vazio;
 * @FILTRO-ARVORE-TIPOS-DE-SIMBOLO = variavel, vetor, matriz, funcao;
 */