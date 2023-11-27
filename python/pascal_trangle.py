# Pascal tranlge
def pascal_trangle(num):
    row = [1]
    y = [0]
    for x in range(num):
        print(row)
        row = [i + j for i, j in zip(row + y, y + row)]
    
if __name__ == '__main__':
    pascal_trangle(10)