#include<iostream>
#include<string>
#include<iomanip>
#include <conio.h>//para utilizar o getch()
#include <ctype.h>//para utilizar o isdigit()
using namespace std;
//Tela apresentacao by Juno Kim
void telaApresentacao(){
	cout<< setw(60) <<setfill('*')<<"\n";	
	cout<< setw(40) <<setfill(' ')<<"GEOMETRIA PLANA\n";
	cout<< setw(60) <<setfill('*')<<"\n";
}

void menu(){
	cout<< setfill(' ')<<setw(10)<<"MENU PRINCIPAL:\n";
	cout<< setfill(' ')<<setw(10)<<"1- QUADRADO\n";
	cout<< setfill(' ')<<setw(10)<<"2- TRIANGULO\n";
	cout<< setfill(' ')<<setw(10)<<"3- CIRCUNFERENCIA\n";
	cout<< setfill(' ')<<setw(5)<<"4- SAIR\n";
	cout<< setw(60) <<setfill('*')<<"\n";
	cout<< setfill(' ')<<setw(5)<<"OPCAO => ";
}

void rodape(){
	cout<<"\nAperte qualquer para voltar ao menu principal\n"<<endl;
    system("pause");
}

void quadrado()
{    
    int lado, area;
    system("cls");
    telaApresentacao();
    cout<<"CALCULO DO QUADRADO"<<endl;
    cout<< setw(60) <<setfill('-')<<"\n";
    cout<<"Digite o lado do quadrado: "; cin>>lado;
    area = lado * lado;
    cout<<"A area do quadrado e: "<<area<<endl;
    rodape();
}

void triangulo()
{    
    int altura, area, base;
    system("cls");
    telaApresentacao();
    cout<<"CALCULO DO TRIANGULO"<<endl;
    cout<< setw(60) <<setfill('-')<<"\n";
    cout<<"Digite a base do triangulo: "; cin>>base;
    cout<<"Digite a altura do triangulo: "; cin>>altura;
    area = (base*altura)/2;
    cout<<"A area do triangulo e: "<<area<<endl;
    rodape();
}

void circunferencia()
{    
    int raio, area, circunferencia;
    system("cls");
    telaApresentacao();
    cout<<"CALCULO DA CIRCUNFERENCIA"<<endl;
    cout<< setw(60) <<setfill('-')<<"\n";
    cout<<"Digite o raio da circiunferencia: "; cin>>raio;
    circunferencia = 2*3.14 * raio;
    area = 3.14*raio*raio;
    cout<<"O calculo da circunferencia e: "<<circunferencia<<endl;
    cout<<"A area da circunferencia e: "<<area<<endl;
    rodape();
}

char validaOpcao(char opcao){
		
	if (opcao!='1' && opcao!='2' && opcao!='3' && opcao!='4'){
			cout << "\nOpcao inavalida, digite (1,2,3,4)\n\n";
			//cout<<"\nPassei aqui 1\n";	
			//opcao=getchar();
			//resposta=getchar();
			system("pause");
	}
	//system("cls");
	
return opcao;
}


/* Inicio do MAIN */
char opcao, resposta;

main(){
	setlocale(LC_ALL, "portuguese");
	cout<<fixed<<setprecision(2);
	do{
		do{	
			telaApresentacao();
			menu();
			cin>>opcao;
			validaOpcao(opcao);
			//cout << opcao;
			system("cls");
		}while (opcao!='1' && opcao!='2' && opcao!='3' && opcao!='4'); 
			
		if(opcao=='1'){	
			quadrado();
		}
		else if (opcao=='2'){
			triangulo();
		}else if (opcao=='3'){
			circunferencia();
		} else {
			cout<<"O programa sera finalizado!\n\n";
			return 0;
		} 
		system("cls");
		//cout<<"Passei aqui 2";
	}while(resposta!='1' && resposta!='2' && resposta!='3' && resposta!='4');
	//while(resposta!=1 && resposta!=2 && resposta!=3 && resposta!=4);
}
