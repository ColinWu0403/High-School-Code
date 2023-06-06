#this program was written on 19/5/2021 by C Wu

#Import statistics module
import statistics

mean = [0,0,0,0]
median = [0,0,0,0]
mode = [0,0,0,0]
#Input Set Numbers
setnum = (int(input("Enter the amount of sets to be calculated ")))
A = 0

for i in range(setnum):
    #Input numbers to be calculated
    x = [float(x) for x in input("Enter the numbers to be calculated: ").split()]
    print("The Numbers of list is: ", x)
    
    A = A + 1
    
    #Calculate Mean, Median, and Mode
    mean = statistics.mean(x)
    median = statistics.median(x)
    mode = statistics.mode(x)
    
    #Round to one decimal place
    mean = round(mean,1)
    median = round(median,1)
    mode = round(mode,1)
    
    #Output
    print("Set",A,": Mean = ",mean,", Median = ",median,", Mode = ",mode)
