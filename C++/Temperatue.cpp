//this algorithm was written by C Wu on 11/4/2020
#include <iostream>
#include <string>
using namespace std;
int main()
{
string day1, day2, day3, hottestday;
double temp1, temp2, temp3, max;
    cout<<"What day is it?\n";
    cin>> day1;
    cout<<"What is the temperature of this day?\n";
    cin>> temp1;
    cout<<"What day is being compared?\n";
    cin>> day2;
    cout<<"What is the temperature of this day?\n";
    cin>> temp2;
    cout<<"What other day is being compared?\n";
    cin>> day3;
    cout<<"What is the temperature of this day?\n";
    cin>> temp3;
    
    if (temp1 > temp2 && temp1 > temp3)
    {
        max = temp1;
        hottestday = day1;
    }
    else
    if (temp2 > temp1 && temp2 > temp3)
    {
        max = temp2;
        hottestday = day2;
    }
    else
    { hottestday = day3; }
    
    cout<<"The hottest day is "<< hottestday<< endl;
    return 0;
    
}

