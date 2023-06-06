//this algorithm was written by C Wu on 12/1/2021

#include <iostream>

using namespace std;

int main()
{
int a[10];
int table[10];
int n, i;

//input loop
for(int x=1; x<6; x++)
{
    cout<<"Enter a number to convert"<<endl;
    cin>>n;
    table[x] = n;

//convert to Binary
    for(i=0; n>0; i++)
    {
        a[i]= n%2 ;
        n = n/2;
    }

//output binary
    cout<<"Binary of the given number = ";

    for(i=i-1 ; i>=0 ; i--) 
    {
        cout<<a[i];
    }
    cout<<endl;
    cout<<endl;
}

//output table 
    cout<<"\nNumber Inputted\tBinary Value\n";
    for(int x=1; x<6; x++)
    {
        n = table[x];
        cout<<table[x]<<"\t\t";
    
        for(i=0; n>0; i++)
        {
            a[i]= n%2;
            n = n/2;
        }
        for(i=i-1 ;i>=0 ;i--)
        {
            cout<<a[i];
        }
        cout<<endl;
    }

    return 0;
}
