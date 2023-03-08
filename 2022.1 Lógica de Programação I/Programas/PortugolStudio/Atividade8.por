programa
{
	
	funcao inicio()
	{
		inteiro n=1, cont=1
		
		para (n=1;n<=100;n++) 
		{
			se (n%2!=0 e n%3!=0) 
			{	
				escreva(n,"\t")
				se (cont==5)
				{
					escreva("\n")
					cont=1
				}
				senao
				{
					cont++
				}
				
			}

		}
	}
}
/* $$$ Portugol Studio $$$ 
 * 
 * Esta seção do arquivo guarda informações do Portugol Studio.
 * Você pode apagá-la se estiver utilizando outro editor.
 * 
 * @POSICAO-CURSOR = 196; 
 * @PONTOS-DE-PARADA = ;
 * @SIMBOLOS-INSPECIONADOS = {n, 6, 10, 1}-{cont, 6, 15, 4};
 * @FILTRO-ARVORE-TIPOS-DE-DADO = inteiro, real, logico, cadeia, caracter, vazio;
 * @FILTRO-ARVORE-TIPOS-DE-SIMBOLO = variavel, vetor, matriz, funcao;
 */