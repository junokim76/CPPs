#include <iostream>
#include <cstdlib>  // rand, srand
#include <ctime>   // time
using namespace std;

main ()
{
	srand (time(NULL)); // inicialização necessária para dar origem a novos valores
	int valor, i;
	for (i=0; i<10; i++) 
	{
		valor=rand()%10 + 1; // gera um valor: neste caso de 1 a 10
		cout<<valor<<endl;
	}
}




/*
int randomize(int inicio, int fim)
{
	int valor;
	valor=rand()%fim + inicio;
	return (valor);
}*/
