/* echo ("====== EXO n°1 ======<br>\n<br>\n");
echo ("Prendre une variables en php (la déclaration d'une variable se fait avec un $ en php), affecter une valeur à cette variable et l'afficher <br>\n"); */

/* version js */

var Nombre = 5;

console.log(Nombre);



/* echo ("<br>\n<br>\n<br>\n====== EXO n°2 ======<br>\n<br>\n");
echo ("Prendre deux variables en php, affecter une valeur à chaque variable, afficher le résultat de l'addition, de la soustraction, et de la multiplication de ces deux variables <br>\n"); */

/* Code à ajouter ci-dessous *******************************************/

var a = 4;
var b = 5;
var result = 0;
var result = a + b;

console.log(result);

var a = 4;
var b = 5;
var result = 0;
var result = a - b;

console.log(result);

var a = 4;
var b = 5;
var result = 0;
var result = a * b;

console.log(result);

/* echo ("<br>\n<br>\n<br>\n====== EXO n°3 ======<br>\n<br>\n");
echo ("Prendre une variable en php et affecter une chaine de caracètere à cette variable et l'afficher <br>\n"); */

var prenom = "quentin";
var nom = "Drumel";
/* Code à ajouter ci-dessous ****************************************/
console.log(prenom,nom);

/* echo ("<br>\n<br>\n<br>\n====== EXO n°4 ======<br>\n<br>\n");
echo ("Afficher à l'aide des deux variables déjà défini le texte contenu dans les variables à l'aide d'une concaténation (un espace est souhaitée entre les deux variables) <br>\n"); */
var a = "coucou";
var b = "petite perruche";
/* Code à ajouter ci-dessous */
console.log(a,b);



/* echo ("<br>\n<br>\n<br>\n====== EXO n°5 ======<br>\n<br>\n");
echo ("Permutter le contenu de la variable a et de la variable b <br>\n"); */
var a = 20;
var b = 30;

var c = a;
var a = b;
var b = c;

console.log("La valeur de B est "+(a),"La valeur est A "+(b));







/* echo ("<br>\n<br>\n<br>\n====== EXO n°6 ======<br>\n<br>\n");
echo ("A partir d'un algorithme, définir dans tout les cas possibles quels chiffre est le plus grand (vous pouvez changer les valeurs des variables a et b pour tester toutes les possiblités) <br>\n"); */

var a = 20 ;
var b = 30 ;

if ( a > b) {
    console.log(+(a),"a est plus moins grand que b "+(b));
} else {
    console.log(+(b),"a est plus que grand que b "+(a)); 
}







/* echo ("<br>\n<br>\n<br>\n====== EXO n°7 ======<br>\n<br>\n");
echo ("faire une fonction qui prend en parametres deux variables ( a et b par exemple ) et qui définis quel chiffre est le plus grand <br>\n"); */

var a = 20 ;
var b = 30 ;

/* Code à ajouter ci-dessous */

function Grandeur (a,b) {
    if (a > b ) {
        console.log(+(a),"a est plus moins grand que b "+(b));
    } else {
        console.log(+(b),"a est plus que grand que b "+(a));
    }
}

console.log(Grandeur);


/* echo ("<br>\n<br>\n<br>\n====== EXO n°8 ======<br>\n<br>\n");
echo ("afficher un nombre aléatoire à partir de la fonction rand() <br>\n"); */
/* Code à ajouter ci-dessous */

function getRandomInt() {
   return Math.floor(Math.random(+1) * 100);
}


console.log(getRandomInt());


/* echo ("<br>\n<br>\n<br>\n====== EXO n°9 ======<br>\n<br>\n");
echo ("afficher 10 nombre aléatoire à partir de la fonction rand() en utilisant une boucle <br>\n"); */



for ( i = 1 ;i <= 10 ;i++) {
    var nombreale = getRandomInt();
    console.log(nombreale);
}

/* echo ("<br>\n<br>\n<br>\n====== EXO n°10 ======<br>\n<br>\n");
echo ("afficher des nombres aléatoires compris entre 1 et 100 et s'arreter quand le dernier chiffre est >90 <br>\n"); */

var a = 0; /* init valeur de depart */

while (a <= 90 ) { /* on lance la boucle */
    console.log(a = Math.floor(Math.random()* 100));
}



/* echo ("<br>\n<br>\n<br>\n====== EXO n°11 ======<br>\n<br>\n");
echo ("Afficher une variable entrée manuellement par l'utilisateur<br>\n"); */
var N=prompt("choisissez un nombre",'tapez votre nombre ici');
document.write("vous avez choisi le nombre "+N);


/* echo ("<br>\n<br>\n<br>\n====== EXO n°12 ======<br>\n<br>\n");
echo ("Demander à l'utilisateur d'entrer un nombre entier et afficher si ce chiffre est pair ou impair<br>\n"); */

var N=prompt("choisissez un nombre",'tapez votre nombre ici');
 
    if (N%2==0) {
        console.log("Votre chiffre est pair")
    } else {
        console.log("Votre chiffre est impair")
    }

/* Code à ajouter ci-dessous */



/* echo ("<br>\n<br>\n<br>\n====== EXO n°13 ======<br>\n<br>\n");
echo ("Même exercice que n°12, mais rajouter un message d'erreur si l'utilisateur n'entre pas un nombre entier<br>\n");

/* Code à ajouter ci-dessous */ 
var N=prompt("choisissez un nombre",'tapez votre nombre ici');
 
    if (N%2==0) {
        console.log("Votre chiffre est pair")
    } else if (N%2==1) {
        console.log("Votre chiffre est impair")
    } else {
        console.log("Rentrez à nouveau un nombre")
    }




/* echo ("<br>\n<br>\n<br>\n====== EXO n°14 ======<br>\n<br>\n");
echo ("Demander à l'utilisateur d'entrer une année, et afficher si cette année est sextile ou bissextile<br>\n"); */

/* Code à ajouter ci-dessous */
var date=prompt("choisissez une date",'tapez votre date ici');

var annee = new Date ();

    if (annee%4==0) {
        console.log("Votre année est sextile");
    } else {
        console.log("Votre année est bissextile");
    }



/* echo ("<br>\n<br>\n<br>\n====== EXO n°15 ======<br>\n<br>\n");
echo ("Demander à l'utilisateur d'entrer une date, et afficher si cette date est valide ou non<br>\n"); */


/* Code à ajouter ci-dessous */
    
var date=prompt("choisissez une date",'tapez votre date ici');

var annee = new Date ();

 if (annee>=2004) {
     console.log("Vous avez plus de 18 ans cette année")
 } else {
     console.log("Vous avez plus de 18 ans cette année")
 }

