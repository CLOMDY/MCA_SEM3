x = float(input("Enter the initial investment amount: "))
y = float(input("Enter the annual interest rate (in %): "))
years = int(input("Enter the number of years: "))
start = int(0)
while start != years:
    interest = x * (y / 100)
    x += interest
    start += 1
    print("Amount after year", start, ":", round(x, 2))
print("Total amount after investment:", round(x, 2))