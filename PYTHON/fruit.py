# write a python progam that calculates the total bill for a customer buying fruits from a store
# ask the user to input the quantity in kilo of the following fruits:
#  1. apple(100/kg)
#  2. mango(60/kg)
#  3. orange(80/kg)
# use input() to collect values and store them in variables
# convert the input values to float
# use arthmetic operators to calculate the individual cost of each fruit and total bill
# use print() to display the individual cost of each fruit and total bill

# ...existing code...

apple_qty = float(input("Enter quantity of apples (kg): "))
mango_qty = float(input("Enter quantity of mangoes (kg): "))
orange_qty = float(input("Enter quantity of oranges (kg): "))

apple_cost = apple_qty * 100
mango_cost = mango_qty * 60
orange_cost = orange_qty * 80

total_bill = apple_cost + mango_cost + orange_cost

print(f"Cost of apples: ₹{apple_cost}")
print(f"Cost of mangoes: ₹{mango_cost}")
print(f"Cost of oranges: ₹{orange_cost}")
print(f"Total bill: ₹{total_bill}")
# ...existing code...