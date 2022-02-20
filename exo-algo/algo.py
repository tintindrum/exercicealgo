#echo ("====== EXO n°1 ======<br>\n<br>\n");
#echo ("Prendre une variables en php (la déclaration d'une variable se fait avec un $ en php), affecter une valeur à cette variable et l'afficher <br>\n"); 

from random import random, randrange


a = 5 
print(a)

#echo ("<br>\n<br>\n<br>\n====== EXO n°2 ======<br>\n<br>\n");
#echo ("Prendre deux variables en php, affecter une valeur à chaque variable, afficher le résultat de l'addition, de la soustraction, et de la multiplication de ces deux variables <br>\n");

a = 5
b = 4
result = a + b 
print(result)

a = 5
b = 4
result = a - b 
print(result)

a = 5
b = 4
result = a * b 
print(result)

#echo ("<br>\n<br>\n<br>\n====== EXO n°3 ======<br>\n<br>\n");
#echo ("Prendre une variable en php et affecter une chaine de caracètere à cette variable et l'afficher <br>\n");

prenom = "quentin"
nom = "Drumel"
print(prenom,nom)


#("<br>\n<br>\n<br>\n====== EXO n°4 ======<br>\n<br>\n");
#"Afficher à l'aide des deux variables déjà défini le texte contenu dans les variables à l'aide d'une concaténation (un espace est souhaitée entre les deux variables) <br>\n");

a = "coucou"
b = "petite perruche"
print(a,b)

#/* echo ("<br>\n<br>\n<br>\n====== EXO n°5 ======<br>\n<br>\n");
#echo ("Permutter le contenu de la variable a et de la variable b <br>\n"); */

a = 20
b = 30

c = a
a = b
b = c
print(a)
print(b)


#("<br>\n<br>\n<br>\n====== EXO n°6 ======<br>\n<br>\n");
#("A partir d'un algorithme, définir dans tout les cas possibles quels chiffre est le plus grand (vous pouvez changer les valeurs des variables a et b pour tester toutes les possiblités) <br>\n");

a = 20 
b = 30 

if  a > b :
    print(a,b)
else :
    print(b,a) 

#echo ("<br>\n<br>\n<br>\n====== EXO n°7 ======<br>\n<br>\n");
#echo ("faire une fonction qui prend en parametres deux variables ( a et b par exemple ) et qui définis quel chiffre est le plus grand <br>\n");


a = 20 
b = 30 

def Grandeur (a,b) :
    if a > b  :  
       print (str(a) + "a est plus moins grand que b " + str(b)) 
    else :
       print (str(b) + "a est plus que grand que b " + str(a))
Grandeur(a,b)

#echo ("<br>\n<br>\n<br>\n====== EXO n°8 ======<br>\n<br>\n");
#echo ("afficher un nombre aléatoire à partir de la fonction rand() <br>\n");

a = randrange(1,100,1)

print(a)

#echo ("<br>\n<br>\n<br>\n====== EXO n°9 ======<br>\n<br>\n");
#echo ("afficher 10 nombre aléatoire à partir de la fonction rand() en utilisant une boucle <br>\n");

import random

for i in range(10) : 
    print(random.randint(1,100))



#echo ("<br>\n<br>\n<br>\n====== EXO n°10 ======<br>\n<br>\n");
#echo ("afficher des nombres aléatoires compris entre 1 et 100 et s'arreter quand le dernier chiffre est >90 <br>\n");

a = 0; #/* init valeur de depart */

while a <= 90 : #/* on lance la boucle */

    a = random.randint(1,100)
    print(a)


#echo ("<br>\n<br>\n<br>\n====== EXO n°11 ======<br>\n<br>\n");
#echo ("Afficher une variable entrée manuellement par l'utilisateur<br>\n");

message = input("Entrez votre message : ")
print(message)

#echo ("<br>\n<br>\n<br>\n====== EXO n°12 ======<br>\n<br>\n");
#echo ("Demander à l'utilisateur d'entrer un nombre entier et afficher si ce chiffre est pair ou impair<br>\n");

a = input('Entrez un nombre: ')

if (int(a)%2==0):
    print(str(a)+"Votre chiffre est pair")
elif (int(a)%2==1) : 
    print(str(a)+"Votre chiffre est impair")  
else :
    print(str(a)+"Réecrire un nombre")


#echo ("<br>\n<br>\n<br>\n====== EXO n°13 ======<br>\n<br>\n");
#echo ("Même exercice que n°12, mais rajouter un message d'erreur si l'utilisateur n'entre pas un nombre entier<br>\n");

b = input('Entrez un nombre: ')

if (int(b)%2==0):
    print(str(b)+"Votre chiffre est pair")
elif (int(b)%2==1) : 
    print(str(b)+"Votre chiffre est impair")  
else : 
    print(str(b)+"Réecrire un nombre")


#echo ("<br>\n<br>\n<br>\n====== EXO n°14 ======<br>\n<br>\n");
#echo ("Demander à l'utilisateur d'entrer une année, et afficher si cette année est sextile ou bissextile<br>\n");
annee = input ('Entrez votre année ')

if (str(annee)%4==1):
    print(str(annee)+"Votre année est bissextile")
else :
    print(str(annee)+"Votre année est sextile")


#echo ("<br>\n<br>\n<br>\n====== EXO n°15 ======<br>\n<br>\n");
#echo ("Demander à l'utilisateur d'entrer une date, et afficher si cette date est valide ou non<br>\n");

annee = input ('Entrez votre année ')

if (str(annee) >= 2000):
    print(str(annee)+"Votre année est avant 2000")
elif (str(annee) < 2000):
    print(str(annee)+"Votre année est après 2000")
else :
    print(str(annee)+"Réecrire votre année")





