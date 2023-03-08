/*
Desenvolver em C++ a quest�o 6 da prova:
Fa�a um programa para ler N n�meros inteiros, onde N deve ser lido no in�cio do programa.
Para cada n�mero lido, dever� ser apresentado:
- Se ele � positivo, negativo ou nulo (= 0); e
- Se ele � divisor de N ou n�o.
Nota: � divisor quando o resto da divis�o de N pelo n�mero � 0 (zero).
Ao final, apresentar:
- O menor/maior n�mero lido;
- A quantidade de n�meros positivos/negativos;
- A m�dia de todos os n�meros lidos.
*/

#include<iostream>
using namespace std;

main()
{
	setlocale(LC_ALL,"portuguese");
	
	int N, cont, numero, maior=-99999, menor=99999,
	cont_pos=0, cont_neg=0, soma=0;
			
	cout<<"Qtos n�meros ser�o lidos? "; cin>>N;
	
	for (cont=1;cont<=N;cont++)
	{
		cout<<"Digite um n�mero: "; cin>>numero;
		if (numero>0)
		{
			cout<<numero<<" � positivo"<<endl;
			cont_pos++;
		}
		else if (numero<0)
		{
			cout<<numero<<" � negativo"<<endl;
			cont_neg++;
		}
		else
		{
			cout<<numero<<" � nulo"<<endl;
		}
		
		if (numero!=0)
			if (N%numero==0)
			{
				cout<<numero<<" � divisor de "<<N<<endl;
			}
			else
			{
				cout<<numero<<" n�o � divisor de "<<N<<endl;			
			}
		else
			cout<<"0 n�o � divisor de nenhum n�mero"<<endl;
	
		if (numero>maior) maior=numero;
		
		if (numero<menor) menor= numero;
		
		soma+=numero; // soma=soma+numero;
	
	}
	cout<<"-------------------------"<<endl;
	cout<<"O menor n�mero � "<<menor<<endl;
	cout<<"O maior n�mero � "<<maior<<endl;
	cout<<"Qtidade de positivos: "<<cont_pos<<endl;
	cout<<"Qtidade de negativos: "<<cont_neg<<endl;
	cout<<"M�dia dos n�meros: "<<soma*1.0/N<<endl;

	cout<<"Fim!";
	
}


