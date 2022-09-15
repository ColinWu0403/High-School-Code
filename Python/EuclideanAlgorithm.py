#this algorithm was written by C Wu, H Fuller, A Chee, D Hukmani on 12/2/2021

#input statements
num1 = int(input("Enter a number "))
num2 = int(input("Enter a number that is smaller in value than the first "))

#if statement
if (num1 >= 2 and num1 <= 1000000) and (num2 >= 2 and num2 <= 1000000):
    difference = 1
    
#while loop 
    while difference != 0:
        difference = num1-num2
        print(num1," - ",num2," = ",difference)

#COPRIME or not COPRIME
        if num1 == num2:
            if num1 == 1 and num2 == 1:
                print("It is a COPRIME")
            else: 
                print("It is NOT COPRIME")

#calculate GCD
        if difference > num2:
            num1 = difference
        elif difference <= num2:
            num1 = num2
            num2 = difference

#GCD
    print("The GCD is ",num1)
