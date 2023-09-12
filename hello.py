
def add(num1, num2):
    return num1 + num2

def subtract(num1, num2):
    return num1 - num2

def multiply(num1, num2):
    return num1 * num2

def divide(num1, num2):
    if num2 != 0:
        return num1 / num2
    else:
        print("Error: Division by zero is not allowed.")
        exit()

print("Welcome to the Calculator!")
print("Please select an operation:")
print("1. Addition")
print("2. Subtraction")
print("3. Multiplication")
print("4. Division")

choice = int(input("Enter your choice (1-4): "))

if choice < 1 or choice > 4:
    print("Error: Invalid choice.")
    exit()

number1 = float(input("Enter the first number: "))
number2 = float(input("Enter the second number: "))

result = 0

if choice == 1:
    result = add(number1, number2)
elif choice == 2:
    result = subtract(number1, number2)
elif choice == 3:
    result = multiply(number1, number2)
elif choice == 4:
    result = divide(number1, number2)

print("Result: ", result)