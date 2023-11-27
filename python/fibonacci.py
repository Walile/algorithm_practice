def fibonacci(num):
    if num == 1:
        return num
    elif num == 0:
        return num
    else:
        return fibonacci(num - 1) + fibonacci(num - 2)
    

for i in range(10):
    print(fibonacci(i), end="\n")