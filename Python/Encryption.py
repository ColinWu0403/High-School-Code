#This Program was written by C Wu on 21/5/2021

#Amount of test cases
Sets = (int(input("Enter the amount of test cases to be inputted: ")))

#Input text to be encrypted
print("Enter the text to be encrypted: ")
text = []

for i in range(int(Sets)):
    text.append(input())

#AlphabetLibrary
AlphabetLibrary = ['','A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];

#Encrypting Table Function
def Encrypt_Table(Str_Integer):
    Encrypted_Num = 0
    
    #A-E: Add 6 to its numerical value
    if Str_Integer > 1 and Str_Integer < 6:
        numAE = Str_Integer + 6
        Encrypted_Num = numAE
    
    #F-J: Square the value
    if Str_Integer > 5 and Str_Integer < 11:
        numFJ = Str_Integer * Str_Integer
        Encrypted_Num = numFJ
    
    #K-O: Divide by 3. Multiply integer remainder by 5 then add 1
    if Str_Integer > 10 and Str_Integer < 16:
        numKO = Str_Integer % 3
        numKO = numKO * 5 + 1
        Encrypted_Num = numKO

    #P-T: Multiply the sum of the digits of its numerical value by 8
    if Str_Integer > 15 and Str_Integer < 21:
        numPT = 0
        while Str_Integer != 0:
            numPT = numPT + (Str_Integer % 10)
            Str_Integer = Str_Integer // 10
        numPT = numPT * 8
        Encrypted_Num = numPT

    #U-Z: Find the largest integer factor of its numerical value less than the value itself. Multiply it by 2.
    if Str_Integer > 20 and Str_Integer < 27:
        numUZ = []
        for j in range(1, Str_Integer + 1):
            if Str_Integer % j ==0:
                numUZ.append(j)
        numUZ.sort()
        numUZ = numUZ[-2] * 2
        Encrypted_Num = numUZ
    
    #Find Remainder of number if larger than 26
    if Encrypted_Num > 26:
        Encrypted_Num = Encrypted_Num % 26

    return Encrypted_Num

#Output the encrypted text
for x in text: 
    #Convert integer back to letters
    for y in x: 
        Output_Number = AlphabetLibrary.index(y.upper())
        Encrypted_Output = Encrypt_Table(Output_Number)
        Final_Output = AlphabetLibrary[Encrypted_Output]
        print(Final_Output, end="")
    print("") 
