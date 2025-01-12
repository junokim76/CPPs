/*Atividade 8
Desenvolver um programa para apresentar os números inteiros de 1 até 100, com exceção dos múltiplos de 2 e múltiplos de 3.
Utilize a estrutura de repetição PARA.
Desafio: apresentar 5 números por linha.*/

programa
{
	inteiro n=0, c=0
	funcao inicio()
	{
		para (n=1; n<=100; n++){
			se (n % 2 != 0 e n % 3 != 0){
				escreva(n," ")
				c++
				se (c % 5 == 0){
					escreva ("\n")
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
 * @POSICAO-CURSOR = 401; 
 * @PONTOS-DE-PARADA = ;
 * @SIMBOLOS-INSPECIONADOS = {n, 8, 9, 1}-{c, 8, 14, 1};
 * @FILTRO-ARVORE-TIPOS-DE-DADO = inteiro, real, logico, cadeia, caracter, vazio;
 * @FILTRO-ARVORE-TIPOS-DE-SIMBOLO = variavel, vetor, matriz, funcao;
 */