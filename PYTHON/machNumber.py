x = float(input("Enter the speed of the object in m/s: "))
machNumber = x / 343.2
if machNumber < 0.8:
    print("Subsonic")
elif 0.8 <= machNumber < 1.2:
    print("Transonic")
elif 1.2 <= machNumber < 5:
    print("Supersonic")
elif 5 <= machNumber < 10:
    print("Hypersonic")
else:
    print("High Hypersonic")