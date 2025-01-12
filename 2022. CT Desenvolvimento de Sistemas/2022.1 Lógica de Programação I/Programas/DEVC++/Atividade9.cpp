#include<iostream>
using namespace std;

main()
{
	setlocale(LC_ALL,"portuguese");
	
	int N;
	string bit="";
	
	cout<<"Número: "; cin>>N;
	if (N==0) bit="0";
	
	while (N>0)
	{
		//cout<<N%2;
		// não funciona => bit = N%2 + bit;
		if (N%2==0) bit = "0" + bit;
		else bit = "1" + bit;
		
		N = N / 2;
		//cout<<" ==> "<<N<<endl;
	
	}
	cout<<bit;
	
	system("pause");
}
