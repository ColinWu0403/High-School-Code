#this program was written by C Wu on 8/2/2021
home = str(input("Place phone call "))

if home == "yes":
    meal = str(input("Would you like to share a meal? "))
    if meal == "yes":
        print("Dine Together!")
        print("Begin Friendship!")
    elif meal == "no":
        beverage = str(input("Do you enjoy a hot beverage? "))
        if beverage == "yes":
            beverage_type = str(input("Which drink do you enjoy? "))
            if beverage_type == "tea":
                print("Lets have tea!")
                print("Begin Friendship!")
            if beverage_type == "coffee":
                print("Lets have coffee!")
                print("Begin Friendship!")
            if beverage_type == "cocoa":
                print("Lets have cocoa!")
                print("Begin Friendship!")
        elif beverage == "no":
            for n in range(7):
                print("Tell me one of your interests")
                interests = str(input("Do I share that interest? "))
                if interests == "yes":
                    print("Why dont we do that together? ")
                    print("Begin Friendship!")
                    break
                elif interests == "no":
                    print("n = n + 1")
                    number_of_no = str(input("n > 6 ? "))
            else:
                print("Choose least objectionable interest")
                print("Partake in interest")
                print("Begin Friendship!")
                
elif home == "no":
    print("Leave a message")
    print("Wait for a callback")
    meal = str(input("Would you like to share a meal? "))
    if meal == "yes":
        print("Dine Together!")
        print("Begin Friendship!")
    elif meal == "no":
        beverage = str(input("Do you enjoy a hot beverage? "))
        if beverage == "yes":
            beverage_type = str(input("Which drink do you enjoy? "))
            if beverage_type == "tea":
                print("Lets have tea!")
                print("Begin Friendship!")
            if beverage_type == "coffee":
                print("Lets have coffee!")
                print("Begin Friendship!")
            if beverage_type == "cocoa":
                print("Lets have cocoa!")
                print("Begin Friendship!")
        elif beverage == "no":
            for n in range(7):
                print("Tell me one of your interests")
                interests = str(input("Do I share that interest? "))
                if interests == "yes":
                    print("Why dont we do that together? ")
                    print("Begin Friendship!")
                    break
                elif interests == "no":
                    print("n = n + 1")
                    number_of_no = str(input("n > 6 ? "))
            else:
                print("Choose least objectionable interest")
                print("Partake in interest")
                print("Begin Friendship!")
