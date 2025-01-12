#include<iostream>
using namespace std; // para não precisar digitar std:: antes do cin e cout

// Escrever 10 9 8 7 6 5 4 3 2 1 0 FOGO!!!

int main()
{
    int cont=10;
    
    while (cont>=0)
    {
        cout<<cont<<" ";
        cont--;
    }
    cout<<"\nFOGO!!!";
    
    cout<<endl<<endl;
    
    for(cont=10;cont>=0;cont--)
    {
        cout<<cont<<" ";
    }
    cout<<"\nFOGO!!!";
    
    cout<<endl<<endl;
    
    cont=10;
    do
    {
        cout<<cont<<" ";
        cont--;
    }while (cont>=0);
    cout<<"\nFOGO!!!";

}
