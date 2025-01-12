programa
{
	
	inteiro nAlunos, cont, contAPROV=0, contREC=0, contREP=0
	real n1, n2, media
	cadeia nome
	
	funcao inicio()
	{
		escreva("Digite a quantidade de alunos da turma: ")
		leia (nAlunos)
		para (cont=1;cont<=nAlunos;cont++){
			escreva("\nDigite o nome do ",cont, "° aluno: ")
			leia (nome)
			
			faca {
			escreva ("Nota 01: ")
			leia (n1)
			se (n1<0 ou n1>10)
			escreva ("\nNota Inválida, digite a nota entre 0 e 10\n")	
			} enquanto (n1 < 0 ou n1 > 10)

			faca {
			escreva ("Nota 02: ")
			leia (n2)
			se (n2<0 ou n2>10)
			escreva ("\nNota Inválida, digite a nota entre 0 e 10\n")	
			} enquanto (n2 < 0 ou n2 > 10)

			
			media = (n1 + n2) /2
			escreva ("\nA media é: ", media)
			se (media>=6){
				escreva(" => APROVADO! :D \n")
				contAPROV++
			} senao se(media >=4){
				escreva (" => RECUPERAÇÃO :( \n")
				escreva ("! Você precisa de ", 12-media," para ser APROVADO!\n")
				contREC++
			} senao se(media < 4){
				escreva (" => REPROVADO! :(... \n\n")
				contREP++
			}
				
		}
		
		escreva ("Temos ", contAPROV," APROVADOS :D \n")
		escreva ("Temos ", contREC, " em RECUPERAÇÃO :[ \n")
		escreva ("Temos ", contREP, " de REPROVADOS :(... \n")
	}
}
/* $$$ Portugol Studio $$$ 
 * 
 * Esta seção do arquivo guarda informações do Portugol Studio.
 * Você pode apagá-la se estiver utilizando outro editor.
 * 
 * @POSICAO-CURSOR = 1031; 
 * @PONTOS-DE-PARADA = ;
 * @SIMBOLOS-INSPECIONADOS = ;
 * @FILTRO-ARVORE-TIPOS-DE-DADO = inteiro, real, logico, cadeia, caracter, vazio;
 * @FILTRO-ARVORE-TIPOS-DE-SIMBOLO = variavel, vetor, matriz, funcao;
 */