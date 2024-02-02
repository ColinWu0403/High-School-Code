//this algorithm was written by C Wu on 11/18/2020

#include <iostream>
#include <string>
using namespace std;

int main()
{
    
    for (int i = 0; i < 3 ; i++) {
    int age;
    cout<< "enter your age\n";
    cin>>age;
      switch(age){
      case 65 ... 100 :
         cout << "You are a Senior" << endl; 
         break;
      case 18 ... 64 :
         cout << "You are an Adult" << endl;
         break;
      case 0 ... 17:
         cout << "You are a Minor" << endl;
         break;
      default :
         cout << "Invalid Age" << endl;
   }
   cout << "Your status is " << age << endl;
    }
    return 0;
}

