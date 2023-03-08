programa
{
	
	funcao inicio()
	{
	inteiro numero, resto, contador=1,N, cont_apr=0

	escreva("Quantos números serão lidos? ")
	leia(N)

	enquanto (contador <= N) 
	{

		escreva ("Digite o ",contador,"° número: ")
		leia (numero)

		resto= numero % 2

		se (resto == 0)
			escreva ("Esse número é par.", "\n")
		senao 
			escreva ("Esse número é impar.", "\n")

		contador ++
	}
		
	}
}
/* $$$ Portugol Studio $$$ 
 * 
 * Esta seção do arquivo guarda informações do Portugol Studio.
 * Você pode apagá-la se estiver utilizando outro editor.
 * 
 * @POSICAO-CURSOR = 307; 
 * @PONTOS-DE-PARADA = ;
 * @SIMBOLOS-INSPECIONADOS = ;
 * @FILTRO-ARVORE-TIPOS-DE-DADO = inteiro, real, logico, cadeia, caracter, vazio;
 * @FILTRO-ARVORE-TIPOS-DE-SIMBOLO = variavel, vetor, matriz, funcao;
 */