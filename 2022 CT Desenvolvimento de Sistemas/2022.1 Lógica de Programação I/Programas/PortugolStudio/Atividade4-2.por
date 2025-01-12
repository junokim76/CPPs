programa {
	funcao inicio() 
	{
	  inteiro velocidade 
       escreva("Velocidade: ")
       leia(velocidade)
       
       se(velocidade<=80) escreva("Não se aplica multa nesse caso.")
       senao se(velocidade>80 e velocidade<=90) escreva("A multa a  aplicar é de 50 reais.")
       senao se(velocidade>90 e velocidade<=110) escreva("A multa a aplicar é de 100 reais.")
       senao escreva("A multa a aplicar é de 200 reais.")   
         
	}
}
/* $$$ Portugol Studio $$$ 
 * 
 * Esta seção do arquivo guarda informações do Portugol Studio.
 * Você pode apagá-la se estiver utilizando outro editor.
 * 
 * @POSICAO-CURSOR = 447; 
 * @PONTOS-DE-PARADA = ;
 * @SIMBOLOS-INSPECIONADOS = ;
 * @FILTRO-ARVORE-TIPOS-DE-DADO = inteiro, real, logico, cadeia, caracter, vazio;
 * @FILTRO-ARVORE-TIPOS-DE-SIMBOLO = variavel, vetor, matriz, funcao;
 */