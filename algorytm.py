import math

liczba = int(input("podaj liczbe: "))
binarny = ""
licznik = 0
while(liczba != 0):
    licznik += 1
    binarny += str(liczba % 2)
    liczba = math.floor(liczba/2)
    if(licznik == 4):
        binarny += " "
        licznik = 0
    
print(binarny[::-1])


