programa
{
	
	funcao inicio()
	{
		inteiro numero
		caracter resposta='S'

		enquanto (resposta=='S' ou resposta=='s')
		{
			escreva("Número: ") leia(numero)
			se (numero%2 == 0) escreva("Número par\n")
			senao escreva("Número ímpar\n")
		
			escreva("Deseja continuar (S/N) ???")
			leia(resposta)
		}	
	}
}
/* $$$ Portugol Studio $$$ 
 * 
 * Esta seção do arquivo guarda informações do Portugol Studio.
 * Você pode apagá-la se estiver utilizando outro editor.
 * 
 * @POSICAO-CURSOR = 306; 
 * @PONTOS-DE-PARADA = ;
 * @SIMBOLOS-INSPECIONADOS = ;
 * @FILTRO-ARVORE-TIPOS-DE-DADO = inteiro, real, logico, cadeia, caracter, vazio;
 * @FILTRO-ARVORE-TIPOS-DE-SIMBOLO = variavel, vetor, matriz, funcao;
 */