# Pyramind

def pyramind(n):
        
    for i in range(1, n+1):
        print(' '*(n-i) + '* '*i)

if __name__ == '__main__':
    pyramind(10)