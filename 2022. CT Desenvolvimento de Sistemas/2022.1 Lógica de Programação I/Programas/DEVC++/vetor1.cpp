#include<iostream>
using namespace std;

main()
{
	setlocale(LC_ALL,"portuguese");
	
	// declara��o de um vetor
	int N=3, numero[N], i, maior=-99999, soma=0;
	
	// entrada
	for(i=0;i<N;i++)
	{	
		cout<<"Digite o "<<i+1<<"� n�mero: ";
		cin>>numero[i];
		
		if (numero[i]>maior)
		{
			maior = numero[i];
		}
		
		soma=soma+numero[i];
	}
	cout<<"O maior n�mero � "<<maior<<endl;
	cout<<"A m�dia � "<<soma*1.0/N<<endl<<endl;
	
	// sa�da
	for(i=0;i<N;i++)
	{	
		cout<<"["<<i<<"] = "<<numero[i]<<endl;
	}
	cout<<endl;
	// atribui��o: dobrar o valor armazenado
	for(i=0;i<N;i++)
	{	
		numero[i] = numero[i] * 2;
		cout<<"["<<i<<"] = "<<numero[i]<<endl;
	}
}
