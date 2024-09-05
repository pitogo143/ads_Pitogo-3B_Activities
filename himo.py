def input_num(num):

 num = 100
 
 if num > 0:
        if num < 100:
         if num % 2 == 0:
            print("The number is positive,even,and less than 100.")
         else:
            print("The number is positive,and less than 100,but not even.")
        else:
            print("The number is positive,even,and less than 100.")
 else:
      print("The number is not even.")
num = int(input("Enter number:"))
input_num(num)