<?php
echo 'Hello World'; // echo sert à afficher un string
echo '<h1>Titre H1</h1>'; // en php on peut mettre du html dans un echo
?>

<h2>Titre H2 en dehors du php</h2>

<?php
//phpinfo();
echo phpversion();
// Variable
$messageAcceuil = '<br>Bonjour à tous'; // $ creer une variable
echo $messageAcceuil;

// Variable de type string
$title = 'Agences immobilieres';

?>

<h1><?php echo $title; ?></h1>

<?php

// Variable de type INT
$annee = 2021;
$age = 43;


// Variable de type float
$pourcentage = 19.6;


// Variable de type bolean
$jesuisleformateur = true ;
$isNewGoodYear = false ;


// Variable de type NULL
$pasDeValeur = NULL; // ne comporte rien

// Variable de type ARRAY (tableau)
$tableau = array('beau', 'menagerie','voiture', 'ordinateur');
echo '<pre>';                     // la balise pre sert à détailler plus clairement un tableau
print_r($tableau);
echo '</pre>';
echo $tableau[0];
echo $tableau[1];
echo $tableau[2];
echo $tableau[3];

//echo '<pre>';
//print_r($GLOBALS);
//echo '</pre>';


?>


<!-- ?= fait un echo directement sans passer part echo -->
<?= 'ici c\'est mon echo'?>

<?php
// Debeug
// Notice => Warning => script
// FATAL

// die('ok formulaire soumis');

// var_dump donne plus de détail sur un array


echo '<pre>';
var_dump($tableau);
echo '</pre>';

// Concatenation qui s'effectue avec un . contrairement au JavaScript
$chaine = 'Salut';
$chaine2 = 'Buzz';
echo '<p>' . $chaine . ' je suis ' . $chaine2 . ' !</p>';


// .= sert à ajouter
$a = 'bonjour';
$a .=' tout le monde';
echo $a;

$url = 'https://www.php.net/';
$image = 'https://codedesign.fr/wp-content/uploads/2018/08/php-leader1.png';
$text = 'image elephant php';
$width = 200;

?>



<!------------------------- EXERCICE CONCATENATION --------------------------->

<!-- Version sans concatenation -->
<a href="<?= $url ?>" target="_blank" style="display:flex;justify-content:center;">
    <img src="<?= $image ?>" alt="<?= $text ?>" width="<?= $width . 'px'?>">
</a>
<hr>
<!-- Version avec concatenation -->
<a href="<?= $url ?>" target="_blank" style="display:flex;justify-content:center;">
    <img <?php echo 'src="' . $image . '" alt="' . $text . '" width="'.$width . 'px"'?>
</a>
<!-- Version avec juste un echo -->
<?php echo '<a href="' . $url . '" target="_blank" style="display:flex;justify-content:center;"><img src="' . $image . '" alt="' . $text . '" width="'.$width . 'px" ></a>' ?>


<hr>
<?php
// Quand ont utilise des doubles guillemet (") ont peut inserer directement des variable
// a l'interieur mais n'est pas bon pour les performances d'un sites

//Exemples

$traiter = 'lu';
$la = 'ici';
echo "Les variables ne sont pas $traiter $la";
echo '<br>';


// Condition
// if
// elseif sans espace en php
// else

$mot1 = 'musique';
$mot2 = 'sport';
$mot3 = 'musique';

if ($mot1 != $mot2){
    echo 'Les mots sont différents';
}else {
    echo 'Les mots sont identiques';
}

echo '<br>';

$age = 43;
if ($age >= 18){
    $majeur = true;
}else {
    $majeur = false;
}

echo '<hr>';





// Condition ternaire
$majeur = ($age>=18) ? true : false;


if ($majeur){
    echo 'Vous êtres Majeur';
}else {
    echo 'Vous n\'êtes pas majeur';
}
echo '<br>';
if ($age < 18 ){
    echo 'je suis mineur';
}elseif ($age >= 65 ){
    echo 'vous êtes à la retraite';
}else {
    echo 'Vous êtes ni mineur ni à la retraite';
}




// Condition propre à PHP

$expression = true;
if ($expression == true): ?>
<p>expression est vrai</p>
<?php else: ?>
<p>expression est fausse</p>
<?php endif;
?>
<hr>
<?php








// switch (variable)

$beer = 'leffe';
switch($beer)
{
    case 'leffe';
    case 'grimbergen';
    case 'guinness';
        echo 'Bon choix';
        break;
    default;
        echo 'Merci de faire un choix...';
        break;
}

// Opérateur de comparaison
// == => ===   3 egale comprend aussi si la valeur est un string ou une valeur
// 12 === '12' // faux
// 12 == '12' // vrai
// != différent

// opérateur logique
// && AND => ET
// || OR => OU

$homme = true;
if ($homme == true && $age>=18){
    echo 'acces au site ok';
}else {
    echo 'Interdit d\'acceser au site';
}



// Arithmétriques
// négation => -$a
// addition => $a + $b
// soustraction => $a - $b
// division => $a / $b
// multiplication => $a * $b
// exponentielle => $a ** $b
// Modulo => $a % $b

echo 3%2;
echo 9%3;
echo 14%5;
$x = 13;
if ($x % 2 == 0){
    echo 'pair';
}else {
    echo 'impair';
}
// prorité à la multiplication
$calcul = 4 + 6 * 3;// 22
echo $calcul;



// incrémentation / Décrementation

$x = 3;
$x++;
echo $x;// 4

echo '<br>x avec post incrémentation est égale à ' . $x++; // 4
echo $x;// 5
echo '<br>x avec post incrémentation est égale à ' . ++$x; // 6
echo --$x; // 5
echo $x --; // 5
echo $x; // 4

// Opérateurs combinés

$x = $x + 3;// 7
$x+3;//10
// $x = $x - 7   => $x - 7
// $x = $x * 3   => $x*3
// $x = $x / 2   => $x/2
// $x = $x % 4   => $x%4





?>

