programa
{
	
	inclua biblioteca Matematica --> mat
	inteiro rep, n, cont, contP=0, menor=2147483647
	real media=0.0
	funcao inicio()
	{
		escreva("Digite a quantidade de repetições: ")
		leia (rep)
		para (cont=1;cont<=rep;cont++){
			escreva ("\nDigite um número: ")
			leia (n)
			media = (media + n)
			se (n>0){
				escreva("Esse número ",n, " é POSITIVO! \n")
				contP++
				
			}senao se (n<0){
				escreva("Esse número ",n, " é NEGATIVO! \n")
				} senao {
					escreva("Esse número é NULO! \n")
				  }
			
			se (n%rep==0){
				escreva("Esse número ",n, " DIVISOR de ", rep, "\n")
			} senao {
				escreva("Esse número ",n, " NÃO é divisor de  ", rep, "\n")
			}
			se (n<menor){
				menor=n
			}
		}
		
		media = (media/2)
		escreva ("\nO menor número lido é ", menor, "\n")
		escreva ("\nA quantidade de números POSITIVOS lido(s) é ", contP, "\n")
		escreva ("\nA media de números lido(s) é ", mat.arredondar(media, 2), "\n")
	}
}
/* $$$ Portugol Studio $$$ 
 * 
 * Esta seção do arquivo guarda informações do Portugol Studio.
 * Você pode apagá-la se estiver utilizando outro editor.
 * 
 * @POSICAO-CURSOR = 607; 
 * @PONTOS-DE-PARADA = ;
 * @SIMBOLOS-INSPECIONADOS = ;
 * @FILTRO-ARVORE-TIPOS-DE-DADO = inteiro, real, logico, cadeia, caracter, vazio;
 * @FILTRO-ARVORE-TIPOS-DE-SIMBOLO = variavel, vetor, matriz, funcao;
 */