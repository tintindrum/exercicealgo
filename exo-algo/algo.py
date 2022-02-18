#echo ("====== EXO n°1 ======<br>\n<br>\n");
#echo ("Prendre une variables en php (la déclaration d'une variable se fait avec un $ en php), affecter une valeur à cette variable et l'afficher <br>\n"); 

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