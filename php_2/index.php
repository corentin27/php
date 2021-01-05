<?php

////////////////////////////////////
/// BOUCLES
////////////////////////////////////

// WHILE
$i = 0;
$num = 50;
while ($i < 10){
    $num--;
    $i++;
}
echo $num;

echo '<br>';

// DO WHILE
do {
    $i++;
}while ($i < 20);
echo $i;

echo '<br>';


// Boucle for

for ($i=0; $i < 10; $i++){
    echo $i;
}




echo '<br>';




for ($i=0 ; $i <= 100;$i++){
    echo $i.' ';
}

echo '<br>';



for ($i=5; $i <= 25 ; $i++){
    if ($i != 25) {
        echo $i.' ,';
    }else {
        echo $i;
    }
}

echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';

for ($i= 0 ; $i <= 100 ; $i+=5){ // += pour incrementer de 5 en 5
    if ($i != 100) {
        echo $i.' ,';
    }else {
        echo $i;
    }
}

echo '<br>';echo '<br>';echo '<br>';

for ($i = 39 ; $i >= 39 && $i <= 81; $i++ ){
    if ($i % 2 ==0){
        echo $i. '<br>';
    }

}

echo '<br>';echo '<br>';echo '<br>';

$current_year = date('Y');
for ($i = 1998; $i <= $current_year; $i++){
    echo '<p class="birth_date">'. $i .'</p>';
}

echo '<br>';echo '<br>';echo '<br>';


for ($i=50; $i >= 25 ; $i-- ){
    if ($i != 30 && $i != 40){
        echo $i . ' ' ;
    }
}

echo '<br>';echo '<br>';echo '<br>';



for ($i = 1 ; $i <= 50 ; $i++){
    $color = ($i >= 36 && $i <= 46) ? 'green': 'red';
    echo '<span style="color:'.$color.';">'.$i.' </span>';
}
echo '<hr>';

$musiques = array('Flûte','Piano','Trompette','Guitare','Batterie','Basse');
echo '<pre>';
echo print_r($musiques);
echo '</pre>';


for ($i = 0 ; $i < count($musiques) ; $i++){
    echo $musiques[$i].',';
}

foreach ($musiques as $instrument) {
    echo $instrument . ',';
}

echo '<br>';echo '<br>';echo '<br>';echo '<hr>';



$fruits = array('banane','pomme','kiwi', 'fraise','orange');


echo '<pre>';
echo print_r($fruits);
echo '</pre>';





// Boucle for avec un tableau qui s'appelle fruits
echo '<ul>';
for ($i=0 ; $i < count($fruits);$i++){
    echo '<li>'.$fruits[$i].'</li>';
}
echo '</ul>';



// Boucle foreach
echo '<ul>';
foreach ($fruits as $fruit){
    echo '<li>'.$fruit .',</li>';
}
echo '</ul>';


// tableau simple

$etudiants = array('Corentin','Alan','Antoine','Valentin','Raynald');

echo '<pre>';
echo print_r($etudiants);
echo '</pre>';



echo $etudiants[2];
// on ajoute un caractere au tableau etudiants
$etudiants[] = 'Zinedine';

echo $etudiants[5];


$etudiants[0] .= 'Marcel';
$etudiants[1] .= 'Michel';
$etudiants[2] .= 'Bernard';
$etudiants[3] .= 'Jacky';
$etudiants[4] .= 'Tuillier';
$etudiants[5] .= 'Zidane';

echo '<pre>';
echo print_r($etudiants);
echo '</pre>';

foreach ($etudiants as $etudiant){
    echo '<p class="student">'.$etudiant. '</p>';
}






//////////////////////////////////////////////////////////////////
///


$nums = array();

for ($i = 10; $i <= 20 ; $i++){
    echo $nums[] = $i;
}
echo '<pre>';
echo print_r($nums);
echo '</pre>';



/////////////////////////////////////////////////////////////////////////
/// ///////////// Tableau associatif ////////////////////////////////////
/// /////////////////////////////////////////////////////////////////////


$livre = array(
    'titre' => 'le rouge et le noir',
    'annee' => 1830,
    'pages' => 640,
    'auteur' => 'stendal'
);


// afficher le titre

echo '<h2>'.$livre['titre'].'</h2>';


// corriger la faute de stendal part Stendhal

$livre['auteur'] = 'Stendhal';


// ajouter le code ISBN 2083898793

echo $livre['isbn'] = 2083898793 ;
echo $livre['prix'] = 5.98 ;

unset($livre['annee']); // unset sert à enlever un elemnt du tableau


echo '<pre>';
echo print_r($livre);
echo '</pre>';



foreach ($livre as $key => $value){
    echo '<p>'.$key.' : '.$value.'</p>';
}

///////////////////////////////////////////////////////////////////////////////////////////



$me = array();

echo $me['age'] = 18;
echo $me['nom'] = 'tailleur';
echo $me['prenom'] = 'corentin';



echo $me['age'];


// faites-vous veillir de 5 ans

echo $me['age'] += 5 ;



echo '<pre>';
echo print_r($me);
echo '</pre>';


echo '<hr>';



$mess = array();

$mess[] = 45;
$mess[] = $etudiants;
$mess['me'] =$me ;


echo $mess['me']['age'] -= 3;



echo '<pre>';
echo print_r($mess);
echo '</pre>';

echo $mess[1][1];


echo '<hr>';
//////////////////////////////////////////////////////////////////////////
//////////////////  TABLEAU MULTIDIMENTIONNELS ///////////////////////////
//////////////////////////////////////////////////////////////////////////


$lettre = array();
$lettre[] = array('A','C','O');
$lettre[] = array('L','B','Z');
$lettre[] = array('I','R','K');

echo '<pre>';
echo print_r($lettre);
echo '</pre>';

// COBRA KAI

//echo $lettre[0][1].[0][2].[1][1].[2][1].[0][0].' '.[2][2].[0][0].[2][0];

echo $lettre[0][1];
echo $lettre[0][2];
echo $lettre[1][1];
echo $lettre[2][1];
echo $lettre[0][0];
echo ' ';
echo $lettre[2][2];
echo $lettre[0][0];
echo $lettre[2][0];

echo $lettre[0][1].$lettre[0][2].$lettre[1][1].$lettre[2][1].$lettre[2][1].$lettre[0][0].' '.$lettre[2][2].$lettre[0][0].$lettre[2][0];


echo '<hr>';


$tiroirs = array('clefs', 'monnaie','facture','facture2');

echo '<ul>';
foreach ($tiroirs as $tiroir){
    echo '<li>'.$tiroir.'</li>';
}
echo '</ul>';

echo $tiroirs[] = 'telephone';

echo '<pre>';
echo print_r($tiroirs);
echo '</pre>';






echo '<hr>';
// $paiements


$paiements = array(
    array(
        'montant' => 12.55,
        'date'    => '12/02/2020'
    ),
    array(
        'montant' => 22.55,
        'date'    => '13/02/2020'
    ),
    array(
        'montant' => 72,
        'date'    => '14/02/2020'
    )
);


echo $paiements[1]['montant'];
echo $paiements[2]['date'];

// ajouter un paiements au tableau de $paiements

$paiements[] = array(
    'montant' => 30,
    'date' => '15/02/2020'
);
$paiements[3]['montant'] = 132;

echo '<pre>';
echo print_r($paiements);
echo '</pre>';


// boucle foreach

foreach ($paiements as $paiement){
    echo '<p> Prix : '.$paiement['montant'].' Date : '.$paiement['date'].'</p>';
}

echo '<br>';echo '<br>';echo '<br>';echo '<br>';


/// boucle for
/// a ne pas oublier que c'est le $i qui boucle et qui va chercher les keys du premier tableau


for ($i = 0; $i < count($paiements); $i++){
    echo '<p> Prix : '.$paiements[$i]['montant'].' Date : '.$paiements[$i]['date'].'</p>';
}



echo '<hr>';


$arrayDeOuf = array(
    0 => "fdjsa",
    1 => 2332,
    2 => array(
        0 => "dsajf",
        "sdfsd" => array(
            0 => 9034,
            "kkk" => "vvv",
            2390 => array(
                'dede'  => 'drd'
            )
        ),
        array(
            0 => 1,
            1 => 2,
            3,
            "k"
        )
    )
);


echo '<pre>';
echo print_r($arrayDeOuf);
echo '</pre>';

echo $arrayDeOuf[2]['sdfsd'][2390]['dede'];
