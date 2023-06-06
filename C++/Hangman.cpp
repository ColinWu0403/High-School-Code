//This program was written by C Wu on 28/3/2022
#include <iostream>
#include <string>
using namespace std;

int main()
{
    int num, end = 1, guesses = 0;
    char letter;
    string w2, h2;
    
    //Hangman Word List
    string word[10] = {
        "t h a i l a n d", "s w i t z e r l a n d", "c a n a d a", "a x o l o t l",
        "p a n g o l i n", "h u m u h u m u n u k u n u k u a p u a a",
        "m o n i t o r", "m e m o r y", "c o m p u t e r", "p o l y m o r p h i s m"
    };
   
    //Hidden Hangman Word List
    string hidden[10] = {
        "_ _ _ _ _ _ _ _", "_ _ _ _ _ _ _ _ _ _ _", "_ _ _ _ _ _", "_ _ _ _ _ _ _",
        "_ _ _ _ _ _ _ _", "_ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _",
        "_ _ _ _ _ _ _", "_ _ _ _ _ _", "_ _ _ _ _ _ _ _", "_ _ _ _ _ _ _ _ _ _ _ _"
    };
    
    //Hangman Word Category
    string category[10] = {
        "country", "country", "country", 
        "animal", "animal", "animal",
        "IT", "IT", "IT", "IT"
    };
    
    cout<<"----------------------Hello! Welcome to the HANGMAN game!--------------------\n\n";
    cout<<"How to play Hangman:\n";
    cout<<"You are allowed choose a number between 1 and 10, this will determine the word you will guess\n";
    cout<<"Each word has a category which will be a hint that will help you\n";
    cout<<"You will enter a lowercase letter to guess if that letter is in the word\n";
    cout<<"If it is in the word, the letter will show up in all the spaces where it appears\n";
    cout<<"Hangman will take count of all guesses you have made in the game\n\n";
    
    cout<<"Enter a number between 1 and 10: ";//Choose hangman word based on input index
    cin>>num;
    if (num > 0 && num <= 10){
        num = num - 1;//word index
        w2 = word[num];
        h2 = hidden[num];
        cout<<"\nHint: The category of the word is: ";
        cout<<category[num]<<"\n";
        cout << "\nThe word is: "<<h2<<"\n\nPlease enter a letter to guess: ";
        cin >> letter;
        for(int i = 0; i < w2.length(); i++){//loop through word; reveal all occurences of letter
            if (letter == w2[i]){
                h2[i] = letter;
            }
        }
        guesses+=1;
        do {//Guess letter do while loop
            if (w2.find(letter) != string::npos ){//If letter is in the word
                cout<<"The letter "<<letter<<" is in the word\n";
            } else {
                cout<<"The letter "<<letter<<" is NOT in the word\n";
            }
            cout<<"\nThe word is: "<<h2;
            cout<<"\n\nYou have made "<<guesses<<" guesses";
            cout<<"\nEnter any number to contiune the game or Enter 0 to end the game: ";
            cin>>end;
            if (end == 0){//if end is 0, end loop
                break;
            }
            cout<<"\nPlease enter a letter to guess: ";
            cin>>letter;
            for(int i = 0; i < w2.length(); i++){//loop through word; reveal all occurences of letter
                if (letter == w2[i]){
                    h2[i] = letter;
                }
            }
            guesses+=1;//increment guesses
        } while (end != 0);//if end is 0, end loop
        for (int j = 0; j < w2.length(); j++) {//Remove spaces from word
            if(w2[j] == ' '){
                w2.erase(j, 1);
            }
        }
        cout<<"\nThe word was: "<<w2<<"\n";
    } else {
        cout<<"Invalid number\n";
    }
    return 0;
}
