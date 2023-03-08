#include<iostream>
using namespace std;

main()
{
	setlocale(LC_ALL,"portuguese");
	
	// declaração de um vetor
	int N=3, numero[N], i, maior=-99999, soma=0;
	
	// entrada
	for(i=0;i<N;i++)
	{	
		cout<<"Digite o "<<i+1<<"º número: ";
		cin>>numero[i];
		
		if (numero[i]>maior)
		{
			maior = numero[i];
		}
		
		soma=soma+numero[i];
	}
	cout<<"O maior número é "<<maior<<endl;
	cout<<"A média é "<<soma*1.0/N<<endl<<endl;
	
	// saída
	for(i=0;i<N;i++)
	{	
		cout<<"["<<i<<"] = "<<numero[i]<<endl;
	}
	cout<<endl;
	// atribuição: dobrar o valor armazenado
	for(i=0;i<N;i++)
	{	
		numero[i] = numero[i] * 2;
		cout<<"["<<i<<"] = "<<numero[i]<<endl;
	}
}
