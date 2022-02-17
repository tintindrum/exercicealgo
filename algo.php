<?php
echo ("====== EXO n°1 ======<br>\n<br>\n");
echo ("Prendre une variables en php (la déclaration d'une variable se fait avec un $ en php), affecter une valeur à cette variable et l'afficher <br>\n");

$variable = 5;
echo $variable;

echo ("<br>\n<br>\n<br>\n====== EXO n°2 ======<br>\n<br>\n");
echo ("Prendre deux variables en php, affecter une valeur à chaque variable, afficher le résultat de l'addition, de la soustraction, et de la multiplication de ces deux variables <br>\n");

/* Code à ajouter ci-dessous *******************************************/

$a = 4;
$b = 5;
$result =  0; /* methode js on init la variable à une valeur */
$result = $a + $b;

echo $result ." <br>\n";
echo ($a + $b);

$a = 4;
$b = 5;
$result = $a - $b;

echo $result ." <br>\n";

$a = 4;
$b = 5;
$result = $a * $b;

echo $result ." <br>\n";



echo ("<br>\n<br>\n<br>\n====== EXO n°3 ======<br>\n<br>\n");
echo ("Prendre une variable en php et affecter une chaine de caracètere à cette variable et l'afficher <br>\n");

/* Code à ajouter ci-dessous **************************************/

$prenom = "quentin";
$nom = "Drumel";

echo $prenom . ' ' . $nom;

echo ("<br>\n<br>\n<br>\n====== EXO n°4 ======<br>\n<br>\n");
echo ("Afficher à l'aide des deux variables déjà défini le texte contenu dans les variables à l'aide d'une concaténation (un espace est souhaitée entre les deux variables) <br>\n");
$a = "coucou";
$b = "petite perruche";
/* Code à ajouter ci-dessous ****************************************/

echo $a . ' ' . $b;
echo ($a. " " .$b);



echo ("<br>\n<br>\n<br>\n====== EXO n°5 ======<br>\n<br>\n");
echo ("Permutter le contenu de la variable a et de la variable b <br>\n");
$a = 20 ;
$b = 30 ;
$c = $a;
/* Code à ajouter ci-dessous ****************************************/
$a = $b;
$b = $c;

echo $a . ' ' . $c;

/* corrigé */

$c = $a;
$a = $b;
$b = $c;

echo ("La valeur de a est maintenant : $a, la valeur de b est maintenant : $b");





echo ("<br>\n<br>\n<br>\n====== EXO n°6 ======<br>\n<br>\n");
echo ("A partir d'un algorithme, définir dans tout les cas possibles quels chiffre est le plus grand (vous pouvez changer les valeurs des variables a et b pour tester toutes les possiblités) <br>\n");
$a = 20 ;
$b = 30 ;
/* Code à ajouter ci-dessous */
if ( $a > $b) {
    echo "$a . ' est plus grand que ' .$b ";
} else {
    echo "$b . 'est moins grand que ' .$a "; 
}

/* corrigé */

if ($a > $b) {

} else if ($b >$a) {

} else {

}

echo ("<br>\n<br>\n<br>\n====== EXO n°7 ======<br>\n<br>\n");
echo ("faire une fonction qui prend en parametres deux variables ( a et b par exemple ) et qui définis quel chiffre est le plus grand <br>\n");
$a = 20 ;
$b = 30 ;
/* Code à ajouter ci-dessous */

function Grandeur ($a,$b) {
    if ($a > $b ) {
        echo $a. "est moins grand que" .$b ;
    } else {
        echo "$b est plus que $a <br>\n";
    }
}

Grandeur ( $a , $b ) ;

/* corrigé */

$result = comparaison ( $toto , $tata );
echo $result;

function comparaison ( $x , $y ) {
    if ($x > $y) {
     $resultat = "$x . ' est plus grand que ' .$y ";
    } else if ( $y > $x) {
    $resultat = "$y . ' est plus grand que ' .$x ";
    }else {
    $resultat = " La variable sont égaux : $x $y ";
    }
    return $resultat;
}


echo ("<br>\n<br>\n<br>\n====== EXO n°8 ======<br>\n<br>\n");
echo ("afficher un nombre aléatoire à partir de la fonction rand() <br>\n");
/* Code à ajouter ci-dessous */

echo rand () ;

/* corrigé */

$nombreale = rand(); /* (0,100) */
echo $nombreale;

echo ("<br>\n<br>\n<br>\n====== EXO n°9 ======<br>\n<br>\n");
echo ("afficher 10 nombre aléatoire à partir de la fonction rand() en utilisant une boucle <br>\n");
// /* Code à ajouter ci-dessous */

for ( $a = 1 ; $a <= 10 ; $a++) {
    echo rand(). '<br>\n';
}

/* corrigé */

for ( $i = 1 ; $i <= 10 ; $i++) {
    $nombreale = rand(); /* (0,100) */
    echo $nombreale. "<br>";
}

echo ("<br>\n<br>\n<br>\n====== EXO n°10 ======<br>\n<br>\n");
echo ("afficher des nombres aléatoires compris entre 1 et 100 et s'arreter quand le dernier chiffre est >90 <br>\n");
/* Code à ajouter ci-dessous */

$a = 0 ; /* init valeur de depart */

while ($a <= 90 ) { /* on lance la boucle */
   echo $a = rand(1,100). "<br>\n";
}



echo ("<br>\n<br>\n<br>\n====== EXO n°11 ======<br>\n<br>\n");
echo ("Afficher une variable entrée manuellement par l'utilisateur<br>\n");
/* Code à ajouter ci-dessous */

$prenom = readline('Entrez votre prénom: ');

echo $prenom ; 
 



echo ("<br>\n<br>\n<br>\n====== EXO n°12 ======<br>\n<br>\n");
echo ("Demander à l'utilisateur d'entrer un nombre entier et afficher si ce chiffre est pair ou impair<br>\n");
/* Code à ajouter ci-dessous */

$a = readline ('Entrez un nombre: ');

    if ( $a%2==0) {
        echo "Votre chiffre est pair";
    } elseif($a%2==1) {
     echo "Votre chiffre est impair" ; 
    }
    else {
        echo "Réecrire un nombre";
    }


echo ("<br>\n<br>\n<br>\n====== EXO n°13 ======<br>\n<br>\n");
echo ("Même exercice que n°12, mais rajouter un message d'erreur si l'utilisateur n'entre pas un nombre entier<br>\n");
/* Code à ajouter ci-dessous */





echo ("<br>\n<br>\n<br>\n====== EXO n°14 ======<br>\n<br>\n");
echo ("Demander à l'utilisateur d'entrer une année, et afficher si cette année est sextile ou bissextile<br>\n");
/* Code à ajouter ci-dessous */

echo ("<br>\n<br>\n<br>\n====== EXO n°15 ======<br>\n<br>\n");
echo ("Demander à l'utilisateur d'entrer une date, et afficher si cette date est valide ou non<br>\n");
/* Code à ajouter ci-dessous */
    

