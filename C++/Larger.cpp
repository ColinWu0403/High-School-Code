//write a program to find the larger of two numbers entered

#include <iostream>
using namespace std;

int main()
{
    double A,B, max;
    max = 0;
    cout<<"Enter a number\n ";//the numbers may be entered on the same line using a space
    cin>> A;
    cout<<"Enter another number\n";
    cin>> B;
    if (A>B)
    {
        max = A;
    }
    
    cout<< "The larger number is "<< max<<endl;
    
    return 0;
}


