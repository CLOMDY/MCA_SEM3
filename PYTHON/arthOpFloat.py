def allOp(x, y):
    print("Addition: ", x + y)
    print("Subtraction: ", x - y)
    print("Multiplication: ", x * y)
    print("Division: ", x / y)
    print("Modulus: ", x % y)
    print("Exponentiation: ", x ** y)
    print("Floor Division: ", x // y)

x = float(input("Enter first number: "))
y = float(input("Enter second number: "))
allOp(x, y)