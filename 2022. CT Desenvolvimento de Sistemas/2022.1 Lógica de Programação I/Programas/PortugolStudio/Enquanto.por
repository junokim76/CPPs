programa
{    
	inclua biblioteca Matematica --> mat
	
	funcao inicio()
	{
		inteiro contador=1, N, A=0, R=0
		cadeia nome, msg
		real n1, n2, m, porcentA, porcentR, somatotal=0.0
		escreva("\n Digite a quantidade de Alunos : ")
		leia(N)
			
		enquanto(contador<=N){
			escreva("\n Digite o nome do Aluno : ")
			leia(nome)
			escreva(" Nota 1: ")
			leia(n1)
			escreva(" Nota 2: ")
			leia(n2)

			m= (n1+n2)/2
			m= mat.arredondar(m,2)
			
			msg = (" Média final do aluno ")
			se (m >= 6){
				escreva (msg, nome, " => ", m, " - APROVADO!\n")
				A ++
			} senao {
				escreva (msg, nome, " => ", m, " - REPROVADO!\n")
				R ++
			}
			contador++	
			somatotal = (somatotal + m)
		}

		//escreva (" \nSala encerrada ! todos alunos cadastrados")
		escreva ("\n Temos ", A, " alunos APROVADOS! e \n")
		escreva ("\n Temos ", R, " alunos REPROVADOS!  \n")

		porcentA = (A * 100.0) / N 
		porcentR = (R * 100.0) / N 	
		//porcentA = mat.arredondar(m,2)
		//porcentR = mat.arredondar(m,2)	
		escreva ("\n Temos ", mat.arredondar(porcentA, 2), " % alunos APROVADOS! e \n")
		escreva ("\n Temos ", mat.arredondar(porcentR, 2), " % alunos REPROVADOS!  \n")
		escreva ("\nO somatório das médias é: ", somatotal, "\n")
		mat.arredondar(somatotal,2)
		escreva ("\nA média da turma é: ", somatotal/N, "\n")
		
	}
}
/* $$$ Portugol Studio $$$ 
 * 
 * Esta seção do arquivo guarda informações do Portugol Studio.
 * Você pode apagá-la se estiver utilizando outro editor.
 * 
 * @POSICAO-CURSOR = 689; 
 * @PONTOS-DE-PARADA = ;
 * @SIMBOLOS-INSPECIONADOS = ;
 * @FILTRO-ARVORE-TIPOS-DE-DADO = inteiro, real, logico, cadeia, caracter, vazio;
 * @FILTRO-ARVORE-TIPOS-DE-SIMBOLO = variavel, vetor, matriz, funcao;
 */