/*Trabalho 2 - Prazo 24/07
Neste momento é possível fazer a 1a etapa com a validação correspondente.

Desenvolver um programa para realizar a correção de um prova de múltipla escolha.
Os dados iniciais a serem lidos são:
- A quantidade de candidatos (N) e
- A quantidade de questões aplicadas (M).
As respostas possíveis que poderão ser aceitas são: A, B, C, D e E.
1ª etapa: O primeiro conjunto de dados a ser lido será o gabarito com as respostas corretas das M questões.
2ª etapa: Após o gabarito, serão lidos os nomes as respostas de cada candidato.
Os valores das questões são iguais.
A nota máxima é 10 e a de classificação é 5.

As estruturas de armazenamento que deverão ser utilizadas estão dispostas abaixo para um melhor entendimento:

O programa deverá:
a) Gerar o vetor NOTA;
b) Apresentar o relatório geral contendo o nome do candidato e sua nota;
c) Calcular e apresentar a média geral dos candidatos;
d) Apresentar a quantidade e o percentual de classificados e desclassificados;
e) Apresentar o relatório de candidatos classificados;
f) Apresentar a melhor nota obtida e seu(s) respectivo(s) candidato(s);
g) Ter, pelo menos, 3 subprogramas.

Desafio (ponto extra):
h) Gerar o vetor ACERTOS com o percentual correspondente e apresentá-lo.
Para a equipe que gerar, antes das demais, a solução correta para o item H (acima), cada integrante receberá um ponto extra na média final.
Nota: O vetor de ACERTOS servirá para identificar o percentual de candidatos que acertaram cada questão.

Importante: O resultado desta avaliação consistirá:
- no desenvolvimento das etapas 1 e 2;
- no desenvolvimento da validação na entrada das respostas (A, B, C, D ou E);
- no desenvolvimento dos itens (de A a G);
Obs.: será considerado para auxílio na avaliação a apresentação do programa (interface), bem como a organização e otimização do código.

Atividade: individual, dupla ou trio.
Postar o programa fonte (cpp).*/

#include <iostream>
#include <string>
using namespace std; //Para nao precisar digitar std:: antes do cin e cout

int main(){
	//Definindo a acentuacao
	setlocale(LC_ALL,"portuguese");
	//Declaracao de variaveis
	int const valorNotaMax=10, valorNotaClass=5;
	int nCandidatos=-99999999, nQuestoes=-9999999, i=0, iCan=0;
	char confirmaGabarito='N';
	
	//Tela apresentacao
	cout << "******************************************************************\n";
	cout << "*                CORRIGE PROVA MULTIPLA ESCOLHA                  *\n";
	cout << "******************************************************************\n";
	
	cout << "\nNumero de candidatos: ";
	cin >> nCandidatos;
	cout << "\nNumero de questoes: ";
	cin >> nQuestoes;
	
	//Declaracao dos arrays e matrizes
	char gabarito[nQuestoes], respostas[nCandidatos][nQuestoes];
	string candidatos[nCandidatos];
	
	//Monta Gabarito da Prova
	do {
		cout << "\n==================================================================\n";
		cout << "\nEntre com o gabarito da prova!\n";
		for (i=0; i<nQuestoes; i++){
			//Valida entradas 
			do{
				cout << "\nDigite a reposta da "<< i+1 <<"a Questao: (A, B, C, D, E): ";
				cin >> gabarito[i];
				
				if(gabarito[i]!='A' && gabarito[i]!='B' && gabarito[i]!='C' && gabarito[i]!='D' && gabarito[i]!='E' 
				&& gabarito[i]!='a' && gabarito[i]!='b' && gabarito[i]!='c' && gabarito[i]!='d' && gabarito[i]!='e'){
					cout << "\nOpcao invalida! ==> " << gabarito[i]<<"\n";
				}
			
			//gabarito[i]=toupper(gabarito[i]);//converte as minusculas em maiusculas
			}while (gabarito[i]!='A' && gabarito[i]!='B' && gabarito[i]!='C' && gabarito[i]!='D' && gabarito[i]!='E' 
			&& gabarito[i]!='a' && gabarito[i]!='b' && gabarito[i]!='c' && gabarito[i]!='d' && gabarito[i]!='e');
			
		}
		//Confirma as repostas do gabarito
		cout << "\n==================================================================\n|";
		for (i=0; i<nQuestoes; i++){
			cout << " Q"<<i+1 << "=" << gabarito[i]<<" |";	
		}
		cout << "\n==================================================================\n";
		do {
			cout << "\nConfirma o gabarito? (S/N): ";
			cin >> confirmaGabarito;
			if (confirmaGabarito !='s' && confirmaGabarito !='n' && confirmaGabarito!='S' && confirmaGabarito!='N'){
				cout << "\nOpcao Invalida! Entre com 'S' ou 'N' ";	
			}
		}while (confirmaGabarito !='s' && confirmaGabarito !='n' && confirmaGabarito!='S' && confirmaGabarito!='N');
		cout << "\n               ***GABARITO CONFIRMADO!***                   \n";	
		//cout << "\nPassei aqui 1 !";
	} while (confirmaGabarito !='s' && confirmaGabarito!='S'); 
	
	//Nome dos candidatos e suas respostas
	cout << "\n==================================================================\n";
	for (iCan=0; iCan<nCandidatos; iCan++){
		cout << "\n\nNome do " << iCan+1 <<"o candidato(a): ";
		cin >> 	candidatos[iCan];
		cout<<"-----------------------------------\n";
		//candidatos[iCan]=toupper(candidatos[iCan]);
		for (i=0; i< nQuestoes; i++){
			do{
				cout << "\nResposta Q"<< i+1 << " candidato(a) "<<candidatos[iCan] <<": ";
				cin >> respostas[iCan][i];
				//							
				if(respostas[iCan][i]!='A' && respostas[iCan][i]!='B' && respostas[iCan][i]!='C' && respostas[iCan][i]!='D' && respostas[iCan][i]!='E' 
				&& respostas[iCan][i]!='a' && respostas[iCan][i]!='b' && respostas[iCan][i]!='c' && respostas[iCan][i]!='d' && respostas[iCan][i]!='e'){
					cout << "\nOpcao invalida! ==> " << respostas[iCan][i]<<" entre com (A, B, C, D, E)  \n";
				}
			//respostas[iCan][i]=toupper(respostas[iCan][i]); 
			}while (respostas[iCan][i]!='A' && respostas[iCan][i]!='B' && respostas[iCan][i]!='C' && respostas[iCan][i]!='D' && respostas[iCan][i]!='E' 
			&& respostas[iCan][i]!='a' && respostas[iCan][i]!='b' && respostas[iCan][i]!='c' && respostas[iCan][i]!='d' && respostas[iCan][i]!='e');
		}
	}
	for (iCan=0;iCan<nCandidatos;iCan++){
		for(i=0;i<nQuestoes;i++){
           	if(respostas[iCan][i]==gabarito[i]){
                cout<<"\n Acertou!!";
            } else{
                cout<<"\n Errou!!";
            }
        }	
	}
	
	//cout<<"-----------------------------------\n\n";
	cout<<"\n\nNOME\tRESPOSTAS\n";
	cout<<"-----------------------------------\n";
	for (iCan=0; iCan<nCandidatos; iCan++){
		cout << candidatos[iCan]<<"\t";
		for (i=0; i<nQuestoes; i++){
			cout << "Q"<<i+1<<"="<< respostas[iCan][i]<<"\t";		
		} 
		cout << "\n";
	} 
		
	cout << endl <<endl;
	system("pause");
	return 0;
}
