programa
{
	
	funcao inicio()
	{
		real n1, n2

		// 1a técnica: com a estrutura FACA-ENQUANTO
		faca
		{
			escreva("Nota 1: ") leia(n1)
			se (n1<0 ou n1>10) // nota errada
			{
				escreva("Nota inválida!!!\n")
			}
		} enquanto(nao(n1>=0 e n1<=10)) // nota não correta
		// as expressões (n1<0 ou n1>10) e (nao(n1>=0 e n1<=10))
		// são iguais.

		

		// 2a técnica: com a estrutura ENQUANTO
		escreva("Nota 2: ") leia(n2)
		enquanto (n2<0 ou n2>10)
		{
			escreva("Nota inválida!!!\n")
			escreva("Nota 2: ") leia(n2)
		}
		
	}
}
/* $$$ Portugol Studio $$$ 
 * 
 * Esta seção do arquivo guarda informações do Portugol Studio.
 * Você pode apagá-la se estiver utilizando outro editor.
 * 
 * @POSICAO-CURSOR = 277; 
 * @PONTOS-DE-PARADA = ;
 * @SIMBOLOS-INSPECIONADOS = {n1, 6, 7, 2};
 * @FILTRO-ARVORE-TIPOS-DE-DADO = inteiro, real, logico, cadeia, caracter, vazio;
 * @FILTRO-ARVORE-TIPOS-DE-SIMBOLO = variavel, vetor, matriz, funcao;
 */