/* Faça um programa para calcular o salário de funcionários de determinadas empresas, além de outras informações. 
Deverá ser fornecido, inicialmente, o nome da empresa e o número de funcionários.
Para cada funcionário deve ser dado como entrada: seu nome, o número de horas trabalhadas e sua categoria.
- Calcule seu salário bruto de acordo com a tabela abaixo:

Categoria	Valor da hora trabalhada
1	R$ 15,00
2	R$ 30,00
3	R$ 50,00
Se o funcionário trabalhar mais de 160 horas por mês, calcule então o número de horas extras. Multiplique este número pelo valor da hora trabalhada + 50%. 
O valor das horas extras faz parte do salário bruto.
- Calcule o INSS: 8% do salário bruto.
- Calcule o imposto de renda (IR) segundo a tabela abaixo:

Salário Bruto descontado o INSS	Desconto de IR
Menor ou igual a R$ 2500	0 = Isento
Maior de R$ 2500 e menor ou igual a R$ 5000	10%
Maior de R$ 5000 e menor ou igual a R$ 8000	20%
Maior que R$ 8000	30%
- Calcule o salário líquido a receber.
- Para cada funcionário deve ser gerado uma tela com seu nome, a categoria, o salário bruto, o valor do desconto de INSS, o valor do desconto de IR  e o salário líquido.
- Ao final, quando terminar os funcionários da empresa, imprimir: o nome da empresa, o total de salários bruto, a média dos salários brutos, o percentual de funcionários isentos de IR, o nome e salário líquido do funcionário de menor remuneração e sua categoria, o nome e salário líquido do funcionário de maior remuneração e sua categoria.
- O programa deverá funcionar para várias empresas até que a resposta à pergunta (“Deseja executar para outra empresa S/N?”) seja Não (‘N’ ou ‘n’).
- A entrada da categoria só poderá aceitar uma das respostas válidas. Da mesma forma, a entrada da resposta Sim ('S' ou 's') e Não ('N' ou 'n') para continuar para uma próxima empresa.

Importante: o salário bruto deve considerar (incluir) as horas extras - quando for o caso.
Ex. 200 horas, Cat. 2: Sal. bruto = (160 * 30) + ( 40 * 30 + ( 40 * 30 * 0.5)) = 4800 + (1200 + 600) = 6600. 
By Juno Kim */


#include <iostream>
#include <string>
using namespace std; //Para nao precisar digitar std:: antes do cin e cout
string empresa, nome, menorNome, maiorNome;
char resposta='s';
int nFuncionarios, cat, cont, valorHoraTrabalhada, contIsentosIR=0, menorCat, maiorCat;
const int cargaHoraria=160;
const float inss=0.08;
float horasTrabalho, salarioBruto, horaExtra=0.0, deducaoINSS, deducaoIR, salarioLiquido, totalSalBruto, menorSalLiquido=999999999999, maiorSalLiquido=0;

int main(){
	
	while (resposta=='S' || resposta=='s'){

		cout << "\nNome da Empresa: ";
		cin >> empresa;
		cout << "Numero de Funcionarios: ";
		cin >> nFuncionarios;
		for(cont=1;cont<=nFuncionarios;cont++){
			cout << "Nome do Funcionario: "; 
			cin >> nome; 
			cout << "Horas Trabalhadas: "; 
			cin >> horasTrabalho;
			
				do{
					cout << "Categoria (1), (2), (3): ";
					cin >> cat;
					if (cat < 1 || cat > 3){
						cout << "\nDigite uma das opcoes validas! --> ";
					}
				} while (cat < 1 || cat > 3);
				//Define Categoria
				if (cat==1){
					valorHoraTrabalhada = 15;
				} else if (cat==2) {
					valorHoraTrabalhada = 30;		
				} else {
					valorHoraTrabalhada = 50;
				}
				//calculo de hora extra
				if (horasTrabalho > cargaHoraria){
					horaExtra = horasTrabalho - cargaHoraria;
					horasTrabalho = horasTrabalho - horaExtra;
					horaExtra = horaExtra * valorHoraTrabalhada + (horaExtra * valorHoraTrabalhada * 0.5 );
				}
				//cout << horaExtra;
				//calculo salario
				salarioBruto = horasTrabalho * valorHoraTrabalhada;
				salarioBruto = salarioBruto + horaExtra;
				totalSalBruto = totalSalBruto + salarioBruto;
							
				//Deducao IR
				if (salarioBruto < 2500){
					deducaoIR = 0;
					contIsentosIR++;
				} else if (salarioBruto <= 5000){  
					deducaoIR = salarioBruto * 0.1;
				} else if (salarioBruto <= 8000) {                           
					deducaoIR = salarioBruto * 0.2;
				} else {
					deducaoIR = salarioBruto * 0.3;
					//cout << contIsentosIR;
				}

				//Deducao do INSS
				deducaoINSS = salarioBruto * inss;
				salarioBruto = salarioBruto - deducaoINSS;
				//Salario Liquido
				salarioLiquido = salarioBruto - deducaoIR;
				if (salarioLiquido < menorSalLiquido){
					menorSalLiquido = salarioLiquido;
					menorNome = nome;
					menorCat = cat;
				} 
				if (salarioLiquido > maiorSalLiquido){
					maiorSalLiquido = salarioLiquido;
					maiorNome = nome; 
					maiorCat = cat;
				}
				
		
			//Impressao Tela Funcionario
			cout << "\n======================================";
			cout << "\nNome do Funcionario: " << nome;
			cout << "\n======================================";
			cout << "\nCategoria do Funcionario: " << cat;
			cout << "\n +++ Valor das horas extras: R$" << horaExtra;
			cout << "\n +++ Salario Bruto: R$" << salarioBruto + deducaoINSS;
			cout << "\n --- Deducao INSS: R$" << deducaoINSS;
			cout << "\n --- Deducao IR: R$" << deducaoIR;
			cout << "\nSalario Liquido a receber: R$" << salarioLiquido;
			cout << "\n======================================\n\n";	
			cout << "**************************************\n";	
			//Reinicia variaveis nível 1
			//nome="";
			cat=0;
			horaExtra=0.0, salarioBruto=0.0, deducaoINSS=0.0, deducaoIR=0.0, salarioLiquido = 0.0;
						
		}
		contIsentosIR = (contIsentosIR * 100.0)/nFuncionarios;
		//Impressao Tela Empresa
		cout << "\n======================================";
		cout << "\nEmpresa: "<<empresa;
		cout << "\n======================================";
		cout << "\nTotal dos Salario Bruto: R$"<< totalSalBruto;
		cout << "\nMedia dos Salarios Brutos: R$" << totalSalBruto / nFuncionarios;
		cout << "\nIsentos de IR: " << contIsentosIR <<"%";
		cout << "\nO menor salario Liquido e de "<< menorNome<< " com valor de R$" << menorSalLiquido << " e Categoria: " << menorCat;
		cout << "\nO maior salario Liquido e de "<< maiorNome<< " com valor de R$" << maiorSalLiquido << " e Categoria: " << maiorCat;
		//Reinicia as variaveis nível 2
		empresa="", menorNome="", maiorNome="";
		totalSalBruto=0.0, menorSalLiquido=999999999, maiorSalLiquido = 0.0;
		contIsentosIR=0;
				
		cout << "\n\nDeseja continuar para nova empresa?(S/N): ";
		cin >> resposta;	
	}
}
	
