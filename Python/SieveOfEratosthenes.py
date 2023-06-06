#This program was written by C Wu on 6/1/2021

Sets = (int(input("Enter the amount of test cases to be inputted: ")))

for i in range(Sets):
    #Input
    x = (int(input("Enter a number from 2 to 45,000: ")))
    if x > 2 and x < 45000:
    
        #Calculate Sieve Of Eratosthenes
        def SieveOfEratosthenes(x):
            prime = [True for i in range(x+1)]
            p = 2
            while (p * p <= x):
            # If prime[p] is not
            # changed, then it is a prime
                if (prime[p] == True):
 
                    # Update all multiples of p
                    for i in range(p * p, x+1, p):
                        prime[i] = False
                p += 1
 
            # Print all prime numbers
            Output_list = []
            for p in range(2, x+1):
                if prime[p]:
                    Output_list.append(p)
            print (Output_list)
    
        #Calculate Composite Set Sizes:
    
        #Prime2 Composite Set Size
        def Prime2(x):
            Factor_2 = 2
            Count_2 = 0
            while Factor_2 < x:
                Factor_2 = Factor_2 + 2
                Count_2 = Count_2 + 1
            if Count_2 > 0:
                print ("Prime 2 Composite Set Size:",Count_2)
    
        #Prime3 Composite Set Size
        def Prime3(x):
            Factor_3 = 3
            Count_3 = 0
            while Factor_3 < x:
                Factor_3 = Factor_3 + 3
                if(Factor_3%2 == 0):
                    Count_3 = Count_3 + 0
                else:
                    Count_3 = Count_3 + 1
            if Count_3 > 0:
                print ("Prime 3 Composite Set Size:",Count_3)
    
        #Prime5 Composite Set Size
        def Prime5(x):
            Factor_5 = 5
            Count_5 = 0
            while Factor_5 < x:
                Factor_5 = Factor_5 + 5
                if (Factor_5%2 == 0):
                    Count_5 = Count_5 + 0
                elif (Factor_5%3 == 0):
                    Count_5 = Count_5 + 0
                else:
                    Count_5 = Count_5 + 1
            if Count_5 > 0:
                print ("Prime 5 Composite Set Size:",Count_5)   
    
        #Prime7 Composite Set Size
        def Prime7(x):
            Factor_7 = 7
            Count_7 = 0
            while Factor_7 < x:
                Factor_7 = Factor_7 + 7
                if (Factor_7%2 == 0):
                    Count_7 = Count_7 + 0
                elif (Factor_7%3 == 0):
                    Count_7 = Count_7 + 0
                elif (Factor_7%5 == 0):
                    Count_7 = Count_7 + 0
                else:
                    Count_7 = Count_7 + 1
            if Count_7 > 0:
                print ("Prime 7 Composite Set Size:",Count_7)  
    
        #Output Statements
        Prime2(x)
        Prime3(x)
        Prime5(x)
        Prime7(x)
        print("The prime numbers between 1 to",x,"is: ")    
        SieveOfEratosthenes(x)
