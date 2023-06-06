//This program was written by C Wu on 13/02/2022

#include <iostream>
#include <cstdio>

using namespace std;

int main()
{
    int c_select;
    
    //multi-tool selection
    cout<<"Welcome to Pharma C\n";
    cout<<"*****************************************************************************\n";
    cout<<"We currently offer 3 services:\n";
    cout<<"1 - FAQ for our services\n";
    cout<<"2 - Self-checkout program\n";
    cout<<"3 - Cost calculator\n";
    cout<<"*****************************************************************************\n";
    cout<<"Enter the corresponding number to access each service: ";
    cin>>c_select;
    cout<<endl;
    
    //multi-tool options
    if(c_select == 1){
        //FAQ
        int faq_select;
        cout<<"Frequently asked questions are:\n";
        cout<<endl;
        cout<<"1 - Do we accept credit/debit cards?\n";
        cout<<"2 - Which medications can be bought without a doctor's perscription?\n";
        cout<<"3 - Does it really matter what time of day you take medications?\n";
        cout<<"4 - Which insurance plans does Pharma C accept?\n";
        cout<<"5 - How to contact Pharma C\n";
        cout<<endl;
        cout<<"Enter the number for each of the question explanations: ";
        cin>>faq_select;
        cout<<endl;
        
        //FAQ conditions
        switch (faq_select) {
            case 1:
                cout<<"Yes, we accept Mastercard, Visa, American Express, Apple Pay, Google Pay, and Cash App.\n";
                break;
            case 2:
                cout<<"Certain medications require a doctor's perscription, ";
                cout<<"please ask our pharmacists if a medicine is perscribed or can be bought without perscriptoin.\n";
                break;
            case 3:
                cout<<"Yes, a dosing schedule is important, because every medication that you take has a specific dosing schedule";
                cout<<"— once a day, three times a day, etc..\n";
                break;
            case 4:
                cout<<"Pharma C accepts insurance from RF&G, Atlantic, and Home Protector Insurance\n";
                break;
            case 5:
                cout<<"Contact us at +501-420-6969 or at our website www.PharmaC.bz\n";
                break;
            default:
                cout<<"Invalid, please enter a correct number\n";
        }
    
    } else if(c_select == 2){
        //Self-checkout program
        int c1;
        int count, amt;
        double ttl;
        ttl = 0;
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
        cout<<endl;
        
        //Conditional Statements
        cout<<"Enter the number for each corresponding choice or enter 0 to skip choosing a menu item: ";
        cin>>c1;
        cout<<endl;
        if(c1 == 0){
            cout<<"Skipping current choice - You have chosen nothing\n";
        } else if (c1 == 1){
            cout<<"How many packages of Choice "<<c1<<" do you want to buy? ";
            cin>> count;
            amt = count * 100;
            ttl = ttl + amt;
            cout<<"You have bought "<<count<<" vaccine packages costing $"<<amt<<".\n";
        } else if (c1 == 2){
            cout<<"How many packages of Choice "<<c1<<" do you want to buy? ";
            cin>> count;
            amt = count * 10;
            ttl = ttl + amt;
            cout<<"You have bought "<<count<<" Flouxetine packages costing $"<<amt<<".\n";
        } else if (c1 == 3){
            cout<<"How many packages of Choice "<<c1<<" do you want to buy? ";
            cin>> count;
            amt = count * 10;
            ttl = ttl + amt;
            cout<<"You have bought "<<count<<" Aspirin packages costing $"<<amt<<".\n";
        } else if (c1 == 4){
            cout<<"How many packages of Choice "<<c1<<" do you want to buy? ";
            cin>> count;
            amt = count * 10;
            ttl = ttl + amt;
            cout<<"You have bought "<<count<<" Metformin packages costing $"<<amt<<".\n";
        } else if (c1 == 5){
            cout<<"How many packages of Choice "<<c1<<" do you want to buy? ";
            cin>> count;
            amt = count * 20;
            ttl = ttl + amt;
            cout<<"You have bought "<<count<<" Montekulast packages costing $"<<amt<<".\n";
        } else if (c1 == 6){
            cout<<"How many packages of Choice "<<c1<<" do you want to buy? ";
            cin>> count;
            amt = count * 25;
            ttl = ttl + amt;
            cout<<"You have bought "<<count<<" Levothyroxine packages costing $"<<amt<<".\n";
        } else {
            cout<<"Invalid option \n";
        }
        
        cout<<endl;
        
        //total
        cout<<"*****************************************************************************\n";
        cout<<"The total is $"<<ttl<<endl;
        
    } else if (c_select == 3){
        //Cost-Calculator
        double price1, price2, price3, price4, price5;//price variables
        double total;
        total = 0;
        
        cout<<"This is our cost calculator with tax included\n";
        cout<<"*****************************************************************************\n";
        cout<<"Enter the cost for price 1: ";
        cin>>price1;
        if(price1 >= 0){
            total = total + price1;
            cout<<"The current total is $"<<total<<endl;
        } else {
            cout<<"Invalid number\n";
            cout<<"The current total is $"<<total<<endl;
        }
        cout<<endl;
        cout<<"Enter the cost for price 2: ";
        cin>>price2;
        if(price2 >= 0){
            total = total + price2;
            cout<<"The current total is $"<<total<<endl;
        } else {
            cout<<"Invalid number\n";
            cout<<"The current total is $"<<total<<endl;
        }
        cout<<endl;
        cout<<"Enter the cost for price 3: ";
        cin>>price3;
        if(price3 >= 0){
            total = total + price3;
            cout<<"The current total is $"<<total<<endl;
        } else {
            cout<<"Invalid number\n";
            cout<<"The current total is $"<<total<<endl;
        }
        cout<<endl;
        cout<<"Enter the cost for price 4: ";
        cin>>price4;
        if(price4 >= 0){
            total = total + price4;
            cout<<"The current total is $"<<total<<endl;
        } else {
            cout<<"Invalid number\n";
            cout<<"The current total is $"<<total<<endl;
        }
        cout<<endl;
        cout<<"Enter the cost for price 5: ";
        cin>>price5;
        if(price5 >= 0){
            total = total + price5;
            cout<<"The current total is $"<<total<<endl;
        } else {
            cout<<"Invalid number\n";
            cout<<"The current total is $"<<total<<endl;
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
        
    } else {
        cout<<"Invalid choice\n";
    }

    return 0;
}
