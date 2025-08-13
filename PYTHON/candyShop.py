numberOf_User = int(input("Enter the number of users: "))
totalNumberOf_Candy = 0

totalNumberOf_Chocolate = 0
totalNumberOf_Gummy = 0
totalNumberOf_Lollipop = 0

totalNumberOf_bulkBuyer = 0

while numberOf_User < 1:
    numberOfCandy = int(input("Enter the number of candies: "))
    numberOfChocolate = int(input("Enter the number of chocolates: "))
    numberOfGummy = int(input("Enter the number of gummies: "))
    numberOfLollipop = int(input("Enter the number of lollipops: "))

    if(numberOfCandy > 10):
        print("BULK BUYER.")
        totalNumberOf_bulkBuyer += 1
        continue

    totalNumberOf_Candy += numberOfCandy
    totalNumberOf_Chocolate += numberOfChocolate
    totalNumberOf_Gummy += numberOfGummy
    totalNumberOf_Lollipop += numberOfLollipop
    numberOf_User -= 1

print("Total number of candies sold: ", totalNumberOf_Candy)
print("Most sold candy: ", max(totalNumberOf_Chocolate, totalNumberOf_Gummy, totalNumberOf_Lollipop))
print("Number of Bulk Buyers: ", totalNumberOf_bulkBuyer)