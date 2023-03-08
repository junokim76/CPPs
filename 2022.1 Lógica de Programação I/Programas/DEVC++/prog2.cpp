// Example program
#include <iostream>
#include <string>
using namespace std;
int count;
int main()
{
    count = 10;
    while (count >=0){
        cout<<count<<" ";
        count--;
    }
    cout<<"\nFOGO!!!";
    
    cout << endl << endl;
    
	for (count=10;count>=0;count--){
		cout << count << " ";
	}
	cout << "\nFOGO!!!";

    cout << endl << endl;
    
    count=10;
    do{
        cout<<count<<" ";
        count --;
    } while (count >=0);
    cout<<"\nFOGO!!!";
}