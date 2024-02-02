//This algorithm was written by C Wu on 10/11/2020 

#include <iostream>
#include <string>
using namespace std;
int main()
{
string turkey;
double GobblerWeight, GrinnWeight, Price, OtherTurkeyPrice;

//Commands for the wieght of the turkeys
    cout<<"Hello Buyer, I am selling two turkeys, Gobbler and Grinn \n";
    cout<<"What is the wieght of Gobbler?\n";
    cin>> GobblerWeight;
    cout<<"What is the weight of Grinn?\n";
    cin>> GrinnWeight;
    
//Commands to determine which turkey is heavier and which turkey you will purchase
    if(GobblerWeight > GrinnWeight)
    {
        cout<<"Gobbler is heavier than Grinn so you will buy him?\n";
        cout<<"Enter the name of the turkey that you will buy:\n";
        cin>>turkey;
    }
    else
    {
        cout<<"Grinn is heavier than Gobbler so you will buy him?\n";
        cout<<"Enter the name of the turkey that you will buy:\n";
        cin>>turkey;
    }
    if(turkey == "Gobbler")
    {
        turkey = GobblerWeight;
        Price = GobblerWeight * 5;
        OtherTurkeyPrice = GrinnWeight * 5;
    }
    if(turkey == "Grinn")
    {
        turkey = GrinnWeight;
        Price = GrinnWeight * 5;
        OtherTurkeyPrice = GobblerWeight * 5;
    }
//Commands to print which turkey you bought and the prices of both
    cout<<"The turkey you purchased is "<<turkey<<endl;
    cout<<"The price of the turkey you bought is "<<Price<<endl;
    cout<<"The price of the other turkey is "<<OtherTurkeyPrice<<endl;
    
    return 0;
}

