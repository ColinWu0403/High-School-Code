//This program was written by C Wu on 1/31/2022

#include <iostream>
#include <stdio.h>

using namespace std;

int main()
{
    cout<<"Welcome to Pharma C\n";
    cout<<endl;
    
    int c1, c2;
    int count, amt;
    double total;
    total = 0;
    amt = 0;
    count = 0;
    
    cout<<"This is our self checkout program\n";
    cout<<"You may choose any of the six following menu items and it will calculate the total cost for you\n";
    cout<<"*****************************************************************************\n";//begin menu
    cout<<"|                                  Pharma C                                 |\n";
    cout<<"|---------------------------------------------------------------------------|\n";
    cout<<"|              1. Pfizer Vaccine |  20 Doses        | $100.00               |\n";
    cout<<"|              2. Flouxetine     |  5 Capsules      | $10.00                |\n";
    cout<<"|              3. Aspirin        |  100 Tablets     | $10.00                |\n";
    cout<<"|              4. Metformin      |  14 Tablets      | $10.00                |\n";
    cout<<"|              5. Montekulast    |  10 Tablets      | $20.00                |\n";
    cout<<"|              6. Levothyroxine  |  5 Tablets       | $25.00                |\n";
    cout<<"*****************************************************************************\n";//end menu
    cout<<"Enter any number to start or enter 0 to end the self checkout program: ";
    cin>>c2;
    cout<<"*****************************************************************************\n";
    
    //Conditional Statements
    while(c2 != 0){
        cout<<"Enter the number for each corresponding choice or enter 0 to skip choosing a menu item: ";
        cin>>c1;    
        if(c1 == 0){
            cout<<"Skipping current choice - You have chosen nothing\n";
        } else if (c1 == 1){
            cout<<"How many packages of Choice "<<c1<<" do you want to buy? ";
            cin>> count;
            amt = count * 100;
            total = total + amt;
            cout<<"You have bought "<<count<<" vaccine packages costing $"<<amt<<".\n";
        } else if (c1 == 2){
            cout<<"How many packages of Choice "<<c1<<" do you want to buy? ";
            cin>> count;
            amt = count * 10;
            total = total + amt;
            cout<<"You have bought "<<count<<" Flouxetine packages costing $"<<amt<<".\n";
        } else if (c1 == 3){
            cout<<"How many packages of Choice "<<c1<<" do you want to buy? ";
            cin>> count;
            amt = count * 10;
            total = total + amt;
            cout<<"You have bought "<<count<<" Aspirin packages costing $"<<amt<<".\n";
        } else if (c1 == 4){
            cout<<"How many packages of Choice "<<c1<<" do you want to buy? ";
            cin>> count;
            amt = count * 10;
            total = total + amt;
            cout<<"You have bought "<<count<<" Metformin packages costing $"<<amt<<".\n";
        } else if (c1 == 5){
            cout<<"How many packages of Choice "<<c1<<" do you want to buy? ";
            cin>> count;
            amt = count * 20;
            total = total + amt;
            cout<<"You have bought "<<count<<" Montekulast packages costing $"<<amt<<".\n";
        } else if (c1 == 6){
            cout<<"How many packages of Choice "<<c1<<" do you want to buy? ";
            cin>> count;
            amt = count * 25;
            total = total + amt;
            cout<<"You have bought "<<count<<" Levothyroxine packages costing $"<<amt<<".\n";
        } else {
            cout<<"Invalid option \n";
        }
        cout<<"Continue self checkout program? (Enter any number to continue, 0 to end) ";
        cin>>c2;
        cout<<endl;
    }
    
    cout<<"*****************************************************************************\n";
    cout<<"The total is $"<<total<<endl;
    return 0;
}
