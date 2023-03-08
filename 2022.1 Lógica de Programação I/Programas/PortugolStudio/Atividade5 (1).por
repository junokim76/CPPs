programa
{
	
	funcao inicio()
	{
		inteiro numero, contador=1
		enquanto (contador <= 5) 
		{
			escreva ("Digite o ",contador,"° número: ")
			leia (numero)
			se (numero % 2 == 0)
				escreva (numero, " é par.", "\n")
			senao 
				escreva (numero, " é impar.", "\n")
			contador ++
		}
	}
}
/* $$$ Portugol Studio $$$ 
 * 
 * Esta seção do arquivo guarda informações do Portugol Studio.
 * Você pode apagá-la se estiver utilizando outro editor.
 * 
 * @POSICAO-CURSOR = 288; 
 * @PONTOS-DE-PARADA = ;
 * @SIMBOLOS-INSPECIONADOS = ;
 * @FILTRO-ARVORE-TIPOS-DE-DADO = inteiro, real, logico, cadeia, caracter, vazio;
 * @FILTRO-ARVORE-TIPOS-DE-SIMBOLO = variavel, vetor, matriz, funcao;
 */