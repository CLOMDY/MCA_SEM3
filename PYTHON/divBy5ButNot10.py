start = int(input("Enter the starting number: "))
end = int(input("Enter the ending number: "))

list = []

for i in range(start, end + 1):
    if i % 5 == 0 and i % 10 != 0:
        list.append(i)

print(list)