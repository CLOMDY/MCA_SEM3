# take 5 numbers from user as input and find out the average of those numbers

def calculate_average(numbers):
    return sum(numbers) / len(numbers)


numbers = []
for i in range(5):
    num = float(input(f"Enter number {i + 1}: "))
    numbers.append(num)
        
average = calculate_average(numbers)
print("The average of the entered numbers is:", average)    