#include<iostream>
using namespace std; // para não precisar digitar std:: antes do cin e cout


int main()
{
    int A, B, C, V;
    
    cout<<"Digite o valor da primeira aresta : ";
    cin>> A ;
    cout<<"Digite o valor da segunda  aresta : ";
    cin>> B ;
    cout<<"Digite o valor da Terceira aresta : ";
    cin>> C ;
    V = A * B * C ;
    cout<<"O volume do paralelepipedo eh: "<<V<<"\n";
    cout<<"A maior aresta eh: ";
    if (A>=B and A>=C)
    {
        cout<<A;
    }
    else if (B>=A and B>=C)
    {       
        cout<<B;
    }
    else
    {
        cout<<C;
    }

}
