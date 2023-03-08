#include<iostream>
#include<string>
using namespace std;

/* fa�a um programa para Ler o nome do aluno e as duas notas, onde N deve ser lido
no inicio do programa.
Para cada aluno fa�a:
- calcular e mostrar a m�dia;
- apresentar a situa��o (Aprovado (m�dia>=6) ou Reprovado).
Ao final apresentar:
- a rela��o de alunos,suas notas e m�dia;
- a m�dia geral da turma;
*/

main()
{
	setlocale(LC_ALL,"portuguese");
	
    string nome;
    float n1, n2, i,media;
    int N=1;
    
    //quantos alunos devem ser lidos
    cout<<"Digite quantos alunos(a) deseja salvar: "; cin>>N;
    
    for(i=0; i<N; i++)
    {
        cout<<"Digite o Nome do "<<i+1<<"� aluno(a): "; cin>>nome;
        cout<<endl<<"Nota 1: "; cin>>n1;
        cout<<"Nota 2: "; cin>>n2;
        media=(n1+n2)/2;
        cout<<endl<<nome<<" obteve a media "<<media<<" e esta ";
        if (media>=6) 
        {
            cout<<"APROVADO(A)"<<endl;
        }
        else 
        {
            cout<<"REPROVADO(A)"<<endl;
        }
         
        cout<<"--------------------------------"<<endl;
                
    }
    
    cout<<"["<<nome<<"] obteve as notas "<<n1<<" e "<<n2<<" e a sua media foi de "<<media<<"!"<<endl;
    
}
