programa
{
	
	funcao inicio()
	{
		inteiro V, M=0
		
		escreva("Digite a velocidade lida: ")
		leia (V)
		se (V <= 80){
		M=0
		escreva("Não terá multa!")
		}
		se (V > 80 e V <= 90 ) {
		M=50
		escreva("A Multa será de ", M)
		}
		se (V > 90 e V <= 110) {
		M=100
		escreva("A Multa será de ", M)
		}
		se (V > 110 ){
		M=200
		escreva("A Multa será de ", M)
		}
		
	}
}
/* $$$ Portugol Studio $$$ 
 * 
 * Esta seção do arquivo guarda informações do Portugol Studio.
 * Você pode apagá-la se estiver utilizando outro editor.
 * 
 * @POSICAO-CURSOR = 371; 
 * @PONTOS-DE-PARADA = ;
 * @SIMBOLOS-INSPECIONADOS = ;
 * @FILTRO-ARVORE-TIPOS-DE-DADO = inteiro, real, logico, cadeia, caracter, vazio;
 * @FILTRO-ARVORE-TIPOS-DE-SIMBOLO = variavel, vetor, matriz, funcao;
 */