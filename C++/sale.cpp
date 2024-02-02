//This program was written by C Wu on 20/11/2020

#include <iostream>
#include <string>

using namespace std;

int main()
{
int Htreat, BEStreat, BHStreat, Htotal, BEStotal, BHStotal, ans;
string name;
//For loop for all 800 parent orders
    for (int i = 0; i < 800; i++){
        cout<<"The student council will be selling thanksgiving treats with the following prices: \n";
        cout<<"$5.00 each for BES headstart students\n";
        cout<<"$7.00 each for BES students other than headstart\n";
        cout<<"$10.00 each for BHS students\n";
        cout<<"Enter your name\n";
        cin>>name;
        cout<<"Which treat will you pick? \n";
        cout<<"Enter 1 for headstart, 2 for BES students other than headstart, and 3 for BHS students.\n";
        cin>> ans;
//switch case determining which order
        switch(ans){
            case 1 :
                cout<< "Your order will be for headstart. " << endl; 
                cout<< "How many thanksgiving treats will you order? "<< endl;
                cin>> Htreat;
                Htotal = Htreat * 5;
                cout<< name <<", the total for your order is: "<< Htotal <<endl;
                break;
            case 2 :
                cout << "Your order will be for BES. " << endl;
                cout<< "How many thanksgiving treats will you order? "<< endl;
                cin>> BEStreat;
                BEStotal = BEStreat * 7;
                cout<< name <<", the total for your order is: "<< BEStotal <<endl;
                break;
            case 3:
                cout << "Your order will be for BHS." << endl;
                cout<< "How many thanksgiving treats will you order? "<< endl;
                cin>> BHStreat;
                BHStotal = BHStreat * 10;
                cout<< name <<", the total for your order is: "<< BHStotal <<endl;
                break;
            default :
                cout << "Invalid Class" << endl;
        }
    }
    return 0;
}


