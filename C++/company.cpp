//This algorithm was written by C Wu on 25/11/2020
//IT Major Final Assessment

#include <iostream>
#include <string>

using namespace std;

int main()
{
    int id, age, gradage, company, BTLCount, KHMHCount, BelizeBankCount, WilliamsBarrowCount, GOBCount, Mostreq, Leastreq;
    string name, grade, major, optionforemployment, BTLName, KHMHName, BelizeBankName, WilliamsBarrowName, GOBName,MostreqName, LeastreqName;
//int variables 
    BTLCount = 0;
    KHMHCount = 0;
    BelizeBankCount = 0;
    WilliamsBarrowCount = 0;
    GOBCount = 0;
    
    BTLName = "BTL";
    KHMHName = "KHMH";
    BelizeBankName = "BelizeBank";
    WilliamsBarrowName = "Williams and Barrow Law Firm";
    GOBName = "Government of Belize";
    
//loop for inputing all information of users
    for (int i = 0; i < 3; i++){
        cout<<"Welcome to our new highschool and tertiary school employment program!\n";
        cout<<"Your have been selected to be part of our beta testing of this program\n";
        cout<<"To start, please enter your name: \n";
        cin>> name;
        cout<<"Enter your student ID: \n";
        cin>> id;
        cout<<"Enter your grade level:\n";
        cin>> grade;
        cout<<"Enter your Age:\n";
        cin>> age;
        cout<<"Enter your age when you will graduate school:\n";
        cin>> gradage;
        cout<<"Enter your current major in highschool/college: \n";
        cin>> major;
        cout<<"Enter which of the 5 companies that you think is best suited for your interests: \n";
        cout<<"For BTL: Enter 1\n";
        cout<<"For KHMH: Enter 2\n";
        cout<<"For BelizeBank: Enter 3\n";
        cout<<"For WilliamsBarrow: Enter 4\n";
        cout<<"For GOB: Enter 5\n";
        cout<<"If you are not interested in any of these companies: Enter any other number\n";
        cin>> company; 
        switch(company){
            case 1 :
                cout<<"Thank you for your Input!"<< endl;
                cout<<"In your opinion, do you think this program is a good option for employment? "<< endl;
                cin>> optionforemployment;
                cout<<"Thank you for your Input!"<< endl;
                BTLCount = BTLCount + 1;
                cout<<"           "<<endl;
                break;
            case 2 :
                cout<<"Thank you for your Input!"<< endl;
                cout<<"In your opinion, do you think this program is a good option for employment? "<< endl;
                cin>> optionforemployment;
                cout<<"Thank you for your Input!"<< endl;
                KHMHCount = KHMHCount + 1;
                cout<<"           "<<endl;
                break;
            case 3:
                cout<<"Thank you for your Input!"<< endl;
                cout<<"In your opinion, do you think this program is a good option for employment? "<< endl;
                cin>> optionforemployment;
                cout<<"Thank you for your Input!"<< endl;
                BelizeBankCount = BelizeBankCount + 1;
                cout<<"           "<<endl;
                break;
            case 4:
                cout<<"Thank you for your Input!"<< endl;
                cout<<"In your opinion, do you think this program is a good option for employment? "<< endl;
                cin>> optionforemployment;
                cout<<"Thank you for your Input!"<< endl;
                WilliamsBarrowCount = WilliamsBarrowCount + 1;
                cout<<"           "<<endl;
                break;
            case 5:
                cout<<"Thank you for your Input!"<< endl;
                cout<<"In your opinion, do you think this program is a good option for employment? "<< endl;
                cin>> optionforemployment;
                cout<<"Thank you for your Input!"<< endl;
                GOBCount = GOBCount + 1;
                cout<<"           "<<endl;
                break;
            default :
                cout << "Thank you for the input!" << endl;
                cout<<"           "<<endl;
        }
    }
//algorithm for most requests
        if(BTLCount >= KHMHCount && BTLCount >= BelizeBankCount && BTLCount >= WilliamsBarrowCount && BTLCount >= GOBCount)
        {
            Mostreq = BTLCount;
            MostreqName = BTLName;
        }
        else
        if(KHMHCount >= BTLCount && KHMHCount >= BelizeBankCount && KHMHCount >= WilliamsBarrowCount && KHMHCount >= GOBCount)
        {
            Mostreq = KHMHCount;
            MostreqName = KHMHName;
        }
        else
        if(BelizeBankCount >= KHMHCount && BelizeBankCount >= BTLCount && BelizeBankCount >= WilliamsBarrowCount && BelizeBankCount >= GOBCount)
        {
            Mostreq = BelizeBankCount;
            MostreqName = BelizeBankName;
        }
        else
        if(WilliamsBarrowCount >= KHMHCount && WilliamsBarrowCount >= BelizeBankCount && WilliamsBarrowCount >= BTLCount && WilliamsBarrowCount >= GOBCount)
        {
            Mostreq = WilliamsBarrowCount;
            MostreqName = WilliamsBarrowName;
        }
        if(GOBCount >= KHMHCount && GOBCount >= BelizeBankCount && GOBCount >= WilliamsBarrowCount && GOBCount >= BTLCount)
        {
            Mostreq = GOBCount;
            MostreqName = GOBName;
        }
//algorithm for least requests
        if(BTLCount <= KHMHCount && BTLCount <= BelizeBankCount && BTLCount <= WilliamsBarrowCount && BTLCount <= GOBCount)
        {
            Leastreq = BTLCount;
            LeastreqName = BTLName;
        }
        else
        if(KHMHCount <= BTLCount && KHMHCount <= BelizeBankCount && KHMHCount <= WilliamsBarrowCount && KHMHCount <= GOBCount)
        {
            Leastreq = KHMHCount;
            LeastreqName = KHMHName;
        }
        else
        if(BelizeBankCount <= KHMHCount && BelizeBankCount <= BTLCount && BelizeBankCount <= WilliamsBarrowCount && BelizeBankCount <= GOBCount)
        {
            Leastreq = BelizeBankCount;
            LeastreqName = BelizeBankName;
        }
        else
        if(WilliamsBarrowCount <= KHMHCount && WilliamsBarrowCount <= BelizeBankCount && WilliamsBarrowCount <= BTLCount && WilliamsBarrowCount <= GOBCount)
        {
            Leastreq = WilliamsBarrowCount;
            LeastreqName = WilliamsBarrowName;
        }
        if(GOBCount <= KHMHCount && GOBCount <= BelizeBankCount && GOBCount <= WilliamsBarrowCount && GOBCount <= BTLCount)
        {
            Leastreq = GOBCount;
            LeastreqName = GOBName;
        }
//algorithm to print most requested company
        cout<<"The most requested company is "<<MostreqName<<endl;
        cout<<"This company has a total of "<<Mostreq<<" requests."<<endl;
        cout<<"           "<<endl;
//algorithm to print least requested company
        cout<<"The least requested comapny is "<<LeastreqName<<endl;
        cout<<"This company has a total of "<<Leastreq<<" requests."<<endl;
        cout<<"           "<<endl;
    return 0;
}



