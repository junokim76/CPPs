#include <iostream>

using namespace std;

main()
{
    setlocale(LC_ALL,"portuguese");

    int valorNotaMax=10, valorNotaClass=5;
    int nCandidatos=-99999999, nQuestoes=-99999999, i=0, iCan=0;
    char confirmaGabarito='N';
    cout<<"\nNumero de candidatos: ";
    cin>>nCandidatos;
    cout<<"\nNumero de questoes: ";
    cin>>nQuestoes;

    char gabarito[nQuestoes], respostas[nCandidatos][nQuestoes];
    string candidatos[nCandidatos];


    for(i=0;i<nQuestoes;i++)
    {
        cout<<"\nDigite a respostada "<<i+1<<"a Questao: ";
        cin>>gabarito[i];
    }
    for(iCan=0;iCan<nCandidatos;iCan++)
    {
        for(i=0;i<nQuestoes;i++)
        {
            cout<<"\nResposta Q"<<i+1<<"Candidato";
            cin>>respostas[iCan][i];
        }
    }
    for(iCan=0;iCan<nCandidatos;iCan++)
    {
        for(i=0;i<nQuestoes;i++)
        {
            if(respostas[iCan][i]==gabarito[i])
            {
                cout<<"\n Acertou!!";
            }
            else
            {
                cout<<"\n Errou!!";
            }
        }
    }

    
}
