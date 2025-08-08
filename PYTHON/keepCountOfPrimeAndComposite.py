x = int(input("Enter a number('-1' to exit): "))

prime_count = 0
composite_count = 0

while x != -1:
    if x < 2:
        print(f"{x} is neither prime nor composite.")
    else:
        is_prime = True
        for i in range(2, int(x**0.5) + 1):
            if x % i == 0:
                is_prime = False
                break
        
        if is_prime:
            prime_count += 1
            print(f"{x} is a prime number.")
        else:
            composite_count += 1
            print(f"{x} is a composite number.")
    
    x = int(input("Enter a number('-1' to exit): "))

print(f"Total prime numbers: {prime_count}")
print(f"Total composite numbers: {composite_count}")
print("Exiting the program.")