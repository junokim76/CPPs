/*
Desenvolver em C++ a questão 6 da prova:
Faça um programa para ler N números inteiros, onde N deve ser lido no início do programa.
Para cada número lido, deverá ser apresentado:
- Se ele é positivo, negativo ou nulo (= 0); e
- Se ele é divisor de N ou não.
Nota: É divisor quando o resto da divisão de N pelo número é 0 (zero).
Ao final, apresentar:
- O menor/maior número lido;
- A quantidade de números positivos/negativos;
- A média de todos os números lidos.
*/

#include<iostream>
using namespace std;

main()
{
	setlocale(LC_ALL,"portuguese");
	
	int N, cont, numero, maior=-99999, menor=99999,
	cont_pos=0, cont_neg=0, soma=0;
			
	cout<<"Qtos números serão lidos? "; cin>>N;
	
	for (cont=1;cont<=N;cont++)
	{
		cout<<"Digite um número: "; cin>>numero;
		if (numero>0)
		{
			cout<<numero<<" é positivo"<<endl;
			cont_pos++;
		}
		else if (numero<0)
		{
			cout<<numero<<" é negativo"<<endl;
			cont_neg++;
		}
		else
		{
			cout<<numero<<" é nulo"<<endl;
		}
		
		if (numero!=0)
			if (N%numero==0)
			{
				cout<<numero<<" é divisor de "<<N<<endl;
			}
			else
			{
				cout<<numero<<" não é divisor de "<<N<<endl;			
			}
		else
			cout<<"0 não é divisor de nenhum número"<<endl;
	
		if (numero>maior) maior=numero;
		
		if (numero<menor) menor= numero;
		
		soma+=numero; // soma=soma+numero;
	
	}
	cout<<"-------------------------"<<endl;
	cout<<"O menor número é "<<menor<<endl;
	cout<<"O maior número é "<<maior<<endl;
	cout<<"Qtidade de positivos: "<<cont_pos<<endl;
	cout<<"Qtidade de negativos: "<<cont_neg<<endl;
	cout<<"Média dos números: "<<soma*1.0/N<<endl;

	cout<<"Fim!";
	
}


