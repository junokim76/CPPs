#include<iostream>
#include<string>
using namespace std; // para não precisar digitar std:: antes do cin e cout

/* Ler o nome do aluno e as duas notas para uma turma de N alunos, onde N deve ser lido
no início do programa.
Para cada aluno faça:
- calcular e mostrar a média;
- apresentar a situação (Aprovado (média>=6) ou Reprovado).
Ao final apresentar:
- O % de alunos aprovados; 
- O % de alunos reprovados.
*/
int main()
{
    string nome;
    float n1, n2, media;
    int N, cont, cont_apr=0, cont_rep=0;
    
    cout<<"Qto alunos ha na turma? "; cin>>N;
    
    for(cont=1; cont<=N; cont++)
    {
        cout<<"Nome  : "; cin>>nome;
        cout<<"Nota 1: "; cin>>n1;
        cout<<"Nota 2: "; cin>>n2;
        media=(n1+n2)/2;
        cout<<nome<<" obteve a media "<<media<<" e esta ";
        if (media>=6) 
        {
            cout<<"APROVADO(A)"<<endl;
            cont_apr++;
        }
        else 
        {
            cout<<"REPROVADO(A)"<<endl;
            cont_rep++;
        }
        
    }
    cout<<"% de aprovados : "<<cont_apr*100.0/N<<endl;
    cout<<"% de reprovados: "<<cont_rep*100.0/N<<endl;
}