#include<iostream>
#include<string>
#include<iomanip>
using namespace std;
//Tela apresentacao
void telaApresentacao(){
	cout << "******************************************************************\n";
	cout << "*                CORRIGE PROVA MULTIPLA ESCOLHA                  *\n";
	cout << "******************************************************************\n";
}

void linhaSepara(){
	cout << "\n-----------------------------------------------------------------\n";
}

//pergunta alternativa e valida
char perguntarAlternativa(int numeroQuestao){
	char resposta;
	do{
		cout<<"Resposta da "<<numeroQuestao<<"a questao, opcoes validas (A, B, C, D, E): ";
		cin>>resposta;
		if(resposta !='A' && resposta !='B' && resposta !='C' && resposta !='D' && resposta !='E' &&
		   resposta !='a' && resposta !='b' && resposta !='c' && resposta !='d' && resposta !='e'){
			cout<<"Opcao invalida! ==>'"<<resposta<<"'<== Digite (A, B, C, D, E)\n\n";
		}
		resposta = toupper(resposta);
	}while(resposta !='A' && resposta !='B' && resposta !='C' && resposta !='D' && resposta !='E' &&
		   resposta !='a' && resposta !='b' && resposta !='c' && resposta !='d' && resposta !='e');
	return resposta;
}
//corrige Questão==Resposta
string corrigeQuestao(char respostaCandidato, char respostaGabarito){
	if(respostaCandidato == respostaGabarito){
		//cout<<"Correta!\n";
		return "acertou";
	} else {
		//cout<<"Errada! Correta==> "<<respostaGabarito<<endl;
		return "errou";
	}
}
//Confirma S/N
char perguntarSimNao(string pergunta){
	char resposta;			
	do {
		cout<<endl<<pergunta;
		cin>>resposta;
		if(resposta !='S' && resposta !='N' && resposta !='s' && resposta !='n'){
			cout<<"Opcao Invalida ==>"<<resposta<<" -Digite S ou N: ";
		}
		resposta = toupper(resposta);
	}while (resposta !='S' && resposta !='N' && resposta !='s' && resposta !='n');
	return resposta;
}

//Calcula Percentual
float calcularPercentual(float parte, int todo){
	return parte/todo*100.0;
}

main(){
	setlocale(LC_ALL, "portuguese");
	cout<<fixed<<setprecision(2);
	
	int N, M, i, j;
	float const nMax=10.00, nClass=5.00;
	
	telaApresentacao();
	//candidatos
	do{
		cout<<"Quantidade de candidatos: "; cin>>N;
		if(N <= 0) cout<<"Favor informar uma quantidade maior que 0.\n";
	} while(N <= 0);
	//questoes
	do{
		cout<<"Quantidade de questoes: "; cin>>M;
		if(M <= 0) cout<<"Favor informar uma quantidade maior que 0.\n";
	} while(M <= 0);
	//Declarações
	string candidatos[N], correcao;
	char R[N][M], gabarito[M], confirmacaoGabarito;
	float nota[N], notaIndividual, pontoPorQuestao=nMax/M, mediaGeral, somaMedias=0, melhorNota=0.00, qtdClassificados=0,acertosQuestao[M],acertos[M];
	
	//Confirnm gab	
	do{
		linhaSepara();
		cout<<"\nInforme o gabarito da prova:";
		linhaSepara();
		for(i=0; i<M;i++){
			gabarito[i] = perguntarAlternativa(i+1);
		}
		cout<<"\nConfirme o gabarito:\n|";
		//exibe gab
		for(i=0; i<M; i++){
			cout << " Q"<<i+1 << "=" << gabarito[i]<<" |";
		}
		confirmacaoGabarito = perguntarSimNao("\nConfirmar Gabarito? (S/N): ");
		if(confirmacaoGabarito == 'N'){
			if(perguntarSimNao("Deseja alterar o numero de questoes? (S/N): ") == 'S'){
				cout<<"Novo numero de questoes: "; 
				cin>>M;
			}
		}
	}while(confirmacaoGabarito=='N');
	
	linhaSepara();
	cout<<"\nRespostas dos candidatos:";
	linhaSepara();
	for(i=0; i<N; i++){
		cout<<"\nInforme o nome do "<<i+1<<"o candidato(a): ";
		cin>>candidatos[i];
		notaIndividual=0;
		//matriz Respostas
		for(j=0; j<M; j++){
			R[i][j] = perguntarAlternativa(j+1);
			correcao = corrigeQuestao(R[i][j], gabarito[j]);
			//pega o return acertou
			if(correcao == "acertou") {
				notaIndividual += pontoPorQuestao;
				acertosQuestao[j]++;
			}
			acertos[j] = calcularPercentual(acertosQuestao[j], N);
		}
		nota[i] = notaIndividual;
		cout<<"\nNota do(a) candidato(a) "<<candidatos[i]<<": "<<notaIndividual<<endl;
		linhaSepara();
	}
	//Relatorios
	cout<<"Relatorio de candidatos e notas";
	linhaSepara();
	for(i=0; i<N; i++){
		cout<<candidatos[i]<<"\t\t | \t"<<nota[i]<<endl;
		somaMedias += nota[i];
		if(nota[i] >= nClass){
			qtdClassificados++;
		}
	}
	//Faz media Geral
	linhaSepara();
	mediaGeral = somaMedias/N;
	cout<<"Media geral dos candidatos: "<<mediaGeral;
	cout<<"\nQuantidade de candidatos classificados: "<<qtdClassificados;
	cout<<"\nPercentual de candidatos classificados: "<<calcularPercentual(qtdClassificados, N)<<"%";
	cout<<"\nPercentual de candidatos desclassificados: "<<calcularPercentual((N-qtdClassificados), N)<<"%";
	
	linhaSepara();
	cout<<"\nRelatorio de candidatos classificados\n";
	for(i=0; i<N; i++){
		if(nota[i] >= nClass){
			cout<<candidatos[i]<<endl; 
		}
		if(nota[i] >= melhorNota){
			melhorNota = nota[i];
		}
	}
	linhaSepara();
	cout<<"\nMelhor nota obtida: "<<melhorNota;
	cout<<"\nCandidato(s) que obteve(obtiveram) esta nota: \n";
	for(i=0; i<N; i++){
		if(nota[i] == melhorNota){
			cout<<candidatos[i]<<endl;
		}
	}
	linhaSepara();
	//percentual de cada questao
	cout<<"\nPercentual de acertos em cada questao\n";
	for(i=0; i<M; i++){
		cout<<"Questao "<<i+1<<": "<<acertos[i]<<" %\t\n";
	}
	//fim 
	cout << endl <<endl;
	system("pause");
	return 0;
}
