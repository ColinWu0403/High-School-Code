//This program was written by C Wu on 9/2/2022

#include <iostream>
#include <cstdio>

using namespace std;

int main()
{
    double price1, price2, price3, price4, price5;//price variables
    double total;
    total = 0;
    
    cout<<"Welcome to Pharma C\n";
    cout<<"This is our cost calculator with tax included\n";
    cout<<"*****************************************************************************\n";
    cout<<"Enter the cost for price 1: ";
    cin>>price1;
    if(price1 >= 0){
        total = total + price1;
        cout<<"The current total is $"<<total<<endl;
    } else {
        cout<<"Invalid number\n";
    }
    cout<<endl;
    cout<<"Enter the cost for price 2: ";
    cin>>price2;
    if(price2 >= 0){
        total = total + price2;
        cout<<"The current total is $"<<total<<endl;
    } else {
        cout<<"Invalid number\n";
    }
    cout<<endl;
    cout<<"Enter the cost for price 3: ";
    cin>>price3;
    if(price3 >= 0){
        total = total + price3;
        cout<<"The current total is $"<<total<<endl;
    } else {
        cout<<"Invalid number\n";
    }
    cout<<endl;
    cout<<"Enter the cost for price 4: ";
    cin>>price4;
    if(price4 >= 0){
        total = total + price4;
        cout<<"The current total is $"<<total<<endl;
    } else {
        cout<<"Invalid number\n";
    }
    cout<<endl;
    cout<<"Enter the cost for price 5: ";
    cin>>price5;
    if(price5 >= 0){
        total = total + price5;
        cout<<"The current total is $"<<total<<endl;
    } else {
        cout<<"Invalid number\n";
    }
    cout<<"*****************************************************************************\n";
    
    //calculate subtotal with tax
    total = total * 1.1;
    cout<<endl;
    
    //Prices
    cout<<"Price 1: $"<<price1<<endl;
    cout<<"Price 2: $"<<price2<<endl;
    cout<<"Price 3: $"<<price3<<endl;
    cout<<"Price 4: $"<<price4<<endl;
    cout<<"Price 5: $"<<price5<<endl;
    
    //Total
    cout<<endl;
    cout<<"The total with a 10% tax included is $";
    printf("%.2f\n", total);
    
    return 0;
}
