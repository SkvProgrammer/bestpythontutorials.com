#building a simple calculator program in python
num1 = float(input("Enter the first number:"))#first number
num2 = float(input("Enter the second number:"))#second number
op   = input("What you want to do (Add,Divide,Multiply,Subtract) ?")

op = op.upper()#making the input as uppercase to avoid case sensitivity

if op == "ADD":
    print("The sum is:",num1 + num2)#addition
elif op == "SUBTRACT":
    print("The difference is:",num1 - num2)#subtraction
elif op == "MULTIPLY":
    print("The product is:",num1 * num2)#multiplication
elif op == "DIVIDE":
    print("The Quotient is:",num1 / num2)#Division
else:
    print("Unknown Operation")
