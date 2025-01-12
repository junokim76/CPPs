// Example program
#include <iostream>
#include <string>
using namespace std;
/*LER O NOME DO ALUNO E AS DUAS NOTAS PARA UMA TURMA DE N ALUNOS, 
ONDE N DEVE SER LIDO NO INICIO DO PROGRAMA PARA CADA ALUNO FACA:
- CALCULAR E MOSTRAR A MEDIA;
- APRESENTAR A SITUACAO (APROVADO OU REPROVADO);
- PARA APROVAR A MEDIA DEVE SER MAIOR IGUAL A 6;
APRESENTAR AO FINAL: 
- A PORCENTAGEM DE ALUNOS APROVADOS;
- A PORCENTAGEM DE ALUNOS REPROVADOS;
*/

int media, n1,n2, cont, qtd, aprov=0, reprov=0, rec=0;
string nome;
int main()
{
    cout << "\nEntre com a quantidade de aluno(s): ";
    cin >> qtd;
    //cout<< qtd;
    for (cont=1; cont <=qtd; cont++){
        cout << "\nEntre com o nome do aluno: ";
        cin >> nome;
        cout << "Entre com a primeira nota: "; 
        cin >> n1;
        cout << "Entre com a segunda nota: "; 
        cin >> n2;
        media = (n1+n2)/2;
        cout << "\nA media e " << media <<"\n";
        if (media >=6){
            cout << "\nO aluno "<<nome<< " esta APROVADO(A)!!!\n";
            aprov++;
        }else if (media >=4 && media <=5){
            cout << "\nO aluno "<<nome<< " esta em RECUPERACAO!!!\n";
            rec++;
        } else {
            cout << "\nO aluno "<<nome<< " esta REPROVADO(A)!!!\n";
            reprov++;
        }
        
    }
    //aprov = aprov * 100.0/qtd;
    cout << "\nTemos " <<aprov * 100.0/qtd<< "% de alunos APROVADOS!"; 
    cout << "\nTemos " <<rec * 100.0/qtd<< "% de alunos em RECUPERACAO!"; 
    cout << "\nTemos " <<reprov * 100.0/qtd<< "% de alunos REPROVADOS!"; 
}
