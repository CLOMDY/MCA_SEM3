x = int(input("Enter a start year: "))
y = int(input("Enter an end year: "))
while x <= y:
    if (x % 4 == 0 and x % 100 != 0) or (x % 400 == 0):
        print(x)
    x += 1