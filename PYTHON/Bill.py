quantity = int(input("Enter the quantity of items: "))
price = float(input("Enter the price per item: "))
discount = float(input("Enter the discount percentage: "))
tax = float(input("Enter the tax percentage: "))

total_price = quantity * price
discount_amount = (discount / 100) * total_price
total_price_after_discount = total_price - discount_amount
tax_amount = (tax / 100) * total_price_after_discount
final_price = total_price_after_discount + tax_amount

print("--------------- BILL ---------------")
print(f"Quantity: {quantity:.1f}")
print(f"Price per item: ${price:.1f}")
print("------------------------------------")
print(f"Amount: ${total_price:.1f}")
print(f"Discount : -${discount_amount:.1f}")
print("------------------------------------")
print(f"Discounted total: ${total_price_after_discount:.1f}")
print(f"Tax amount: +${tax_amount:.1f}")
print("------------------------------------")
print(f"Total amount to be paid: ${final_price:.1f}")