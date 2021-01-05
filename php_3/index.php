<?php
// echo "<br />";  // pour un retour à la ligne
//Manuel seulement ! Internet interdit !
// ne pas réinventer la roue, fonction existe surement deja !!!
$fable = "Maître corbeau sur son arbre perché tenait en son bec un fromage";

//calculez le nombre de caractères dans la chaîne ci-dessus, et stockez-la dans une variable nommée "myStringLength" :

$myStringLength = mb_strlen ($fable,$encoding = null );


//affichez la variable myStringLength

echo $myStringLength;
echo '<br>';


//calculez le nombre de mots dans la phrase précédente, et affichez le


function str_word_count_utf8($str) {
    return count(preg_split('~[^\p{L}\p{N}\']+~u',$str));
}
echo str_word_count_utf8($fable);


//affichez la chaîne toute en majuscule
echo '<br>';
echo mb_strtoupper($fable);

//affichez la chaîne avec seulement la première lettre de la phrase en majuscule

echo '<br>';
echo ucfirst($fable);

//affichez la chaîne avec la première lettre de chaque mot en majuscule

echo '<br>';
echo ucwords($fable);


//affichez les 10 premiers caractères de la chaîne

echo '<br>';
echo mb_substr ($fable , 0 , 10);






//affichez la chaîne à l'envers (le dernier caractère en premier)


echo '<br>';
//echo strrev ($fable );
/**
 * Reverse a miltibyte string.
 *
 * @param string $string The string to be reversed.
 * @param string|null $encoding The character encoding. If it is omitted, the internal character encoding value
 *     will be used.
 * @return string The reversed string
 */
function mb_strrev(string $string, string $encoding = null): string
{
    $chars = mb_str_split($string, 1, $encoding ?: mb_internal_encoding());
    return implode('', array_reverse($chars));
}
echo mb_strrev($fable);






//remplacez tous les "a" par des "?"




//affichez la valeur de pi (π) à l'écran (une fonction existe)

echo '<br>';
echo pi();


//arrondissez la valeur de pi à 2 décimale, et affichez la

echo '<br>';
echo round(pi(),2);



//générez un nombre aléatoire entre 10 et 20, et affichez le


echo '<br>';
echo random_int(10, 20);



//stockez tous les mots de la chaîne $fable dans un array nommé "words"

$words = explode(' ',$fable);


echo '<pre>';
print_r($words);
echo '</pre>';



//affichez le premier mot de votre array

echo '<br>';
echo $words[0];


//affichez le deuxième mot de votre array


echo '<br>';
echo $words[1];



//affichez le dernier mot de votre array, sans compter le nombre d'élément (une fonction spécifique existe)

echo '<br>';
echo array_key_last($words);



//essayez la fonction suivante : print_r($words);

echo '<pre>';
print_r($words);
echo '</pre>';

//reformez une chaîne à partir de votre array. Chaque mot doit être recollés avec un "<br />". Stockez cette chaîne dans une variable nommée "fable2"

//for ($i = 0; $i < count($words[0]); $i++){
//    echo $words[$i].'</br>';
//}
$fable2 = implode('<br>',$words);
echo $fable2;


//Affichez l'année actuelle

echo date('Y',time());

//Affichez la date au format suivant : jj/mm/yyyy

echo date('d/m/Y');


//affichez tous les paramètres de configuration de PHP dans votre page (une fonction existe pour ça)

// phpinfo();

