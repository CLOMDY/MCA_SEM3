import time

x = int(input("Enter a number: "))
while x != 0:
    print("Countdown:", x)
    x = x - 1
    time.sleep(1)
print("Countdown finished!")