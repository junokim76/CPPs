#include<iostream>
#include<string>
#include<iomanip>
using namespace std;
char perguntarAlternativa(int numeroQuestao){
	char resposta;
	do{
		cout<<"Resposta da "<<numeroQuestao<<"� quest�o (A, B, C, D ou E): ";
		cin>>resposta;
		resposta = toupper(resposta);
		if(resposta != 'A' && resposta != 'B' && resposta != 'C' && resposta != 'D' && resposta != 'E'){
			cout<<"Op��o inv�lida! Digite A, B, C, D ou E.\n";
		}
	} while(resposta != 'A' && resposta != 'B' && resposta != 'C' && resposta != 'D' && resposta != 'E');
	return resposta;
}

string corrigirQuestao(char respostaCandidato, char respostaGabarito){
	if(respostaCandidato == respostaGabarito){
		cout<<"Quest�o assinalada corretamente.\n";
		return "acertou";
	} else {
		cout<<"Quest�o assinalada incorretamente. Resposta correta: "<<respostaGabarito<<endl;
		return "errou";
	}
}

char perguntarSimOuNao(string pergunta){
	char resposta;			
	do {
		cout<<endl<<pergunta;
		cin>>resposta;
		resposta = toupper(resposta);
		if(resposta != 'S' && resposta != 'N'){
			cout<<"Op��o inv�lida. Digite S ou N.\n";
		}
	} while(resposta != 'S' && resposta != 'N');
	
	return resposta;
}

float calcularPercentual(float parte, int todo){
	return parte/todo*100.0;
}

main(){
	setlocale(LC_ALL, "portuguese");
	cout<<fixed<<setprecision(2);
	
	int N, M, i, j;
	float const nMax=10.00, nClass=5.00;
	
	do{
		cout<<"Quantidade de candidatos: "; cin>>N;
		if(N <= 0) cout<<"Quantidade de candidatos precisa ser maior que 0.\n";
	} while(N <= 0);
	
	do{
		cout<<"Quantidade de quest�es: "; cin>>M;
		if(M <= 0) cout<<"Quantidade de quest�es precisa ser maior que 0.\n";
	} while(M <= 0);
	
	string candidatos[N], correcao;
	char R[N][M], gabarito[M], confirmacaoGabarito;
	float nota[N], notaIndividual, pontoPorQuestao=nMax/M, mediaGeral, somaMedias=0, melhorNota=0.00, qtdClassificados=0,acertosQuestao[M];;
	
	
	float acertos[M];
	
	do{
		cout<<"\nInforme o gabarito da prova\n";
		for(i=0; i<M;i++){
			gabarito[i] = perguntarAlternativa(i+1);
		}
	
		cout<<"\nConfirma��o do gabarito\n";
		for(i=0; i<M; i++){
			cout<<"Resposta da "<<i+1<<"� quest�o: "<<gabarito[i]<<endl;
		}
		
		confirmacaoGabarito = perguntarSimOuNao("Gabarito correto (S/N)? ");
		if(confirmacaoGabarito == 'N'){
			if(perguntarSimOuNao("Deseja alterar o n�mero de quest�es (S/N)? ") == 'S'){
				cout<<"Novo n�mero de quest�es: "; cin>>M;
			}
		}
	
	} while(confirmacaoGabarito == 'N');
	
	cout<<"\nRespostas dos candidatos\n";
	for(i=0; i<N; i++){
		cout<<"\nInforme o nome do(a) "<<i+1<<"�(�) candidato(a): ";
		cin>>candidatos[i];
		notaIndividual=0;
		
		for(j=0; j<M; j++){
			R[i][j] = perguntarAlternativa(j+1);
			correcao = corrigirQuestao(R[i][j], gabarito[j]);
			
			if(correcao == "acertou") {
				notaIndividual += pontoPorQuestao;
				acertosQuestao[j]++;
			}
			
			acertos[j] = calcularPercentual(acertosQuestao[j], N);

		}
		nota[i] = notaIndividual;
		cout<<"\nNota do(a) candidato(a) "<<candidatos[i]<<": "<<notaIndividual<<endl;
	}
	
	cout<<"\nRelat�rio de candidatos e notas\n";
	cout<<"\nCandidato(a)\t | \tNota\n";
	cout<<"______________________________\n\n";
	for(i=0; i<N; i++){
		cout<<candidatos[i]<<"\t\t | \t"<<nota[i]<<endl;
		somaMedias += nota[i];
		if(nota[i] >= nClass){
			qtdClassificados++;
		}
	}
	
	mediaGeral = somaMedias/N;
	cout<<"\nM�dia geral dos candidatos: "<<mediaGeral;
	cout<<"\nQuantidade de candidatos classificados: "<<qtdClassificados;
	cout<<"\nPercentual de candidatos classificados: "<<calcularPercentual(qtdClassificados, N)<<"%";
	cout<<"\nPercentual de candidatos desclassificados: "<<calcularPercentual((N-qtdClassificados), N)<<"%";
	
	cout<<"\n\nRelat�rio de candidatos classificados\n";
	for(i=0; i<N; i++){
		if(nota[i] >= nClass){
			cout<<candidatos[i]<<endl; 
		}
		
		if(nota[i] >= melhorNota){
			melhorNota = nota[i];
		}
	}
	
	cout<<"\nMelhor nota obtida: "<<melhorNota;
	cout<<"\nCandidato(s) que obteve(obtiveram) esta nota: \n";
	for(i=0; i<N; i++){
		if(nota[i] == melhorNota){
			cout<<candidatos[i]<<endl;
		}
	}
	
	cout<<"\nPercentual de acertos em cada quest�o\n";
	for(i=0; i<M; i++){
		cout<<"Quest�o "<<i+1<<": "<<acertos[i]<<"%\n";
	}
}
