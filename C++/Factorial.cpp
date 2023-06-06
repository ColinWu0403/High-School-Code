//This program was written by C Wu on 21/3/2022

#include <iostream>

using namespace std;

int main()
{
    while(1){//loop indefinitely
        double num;
        double factorial = 1;//initialize factorial
        cout<<"Enter a number to find the factorial of that number ";
        cin>>num;
        //factorial of a positive number
        if(num > 0){
            for(int x = 1; x <= num; ++x){
                factorial = factorial * x;
            }
            cout<<num<<"! = "<<factorial<<"\n\n";
        //factorial of a negative number
        } else if (num < 0) {
            cout<<num<<"! is undefined\n";
            cout<<"Please input a positive number\n\n";
        //factorial of 0
        } else {
            cout<<num<<"! = 1\n\n";
        }
    }
    return 0;
}
