<?php
////////////////////////////////////////////////////////////
//////////////// Function Utilisateur //////////////////////
/// ////////////////////////////////////////////////////////
/// Ne jamais faire confiance à l'utilisateur            ///
/// Don't repeat yourself                                ///
////////////////////////////////////////////////////////////


use JetBrains\PhpStorm\Pure;

function maPremiereFonction()
{
    echo 'Bravo, votre première fonction est magnifique';
}
maPremiereFonction();


function maDeuxiemeFonction()
{

    return '<p>super ma deuxieme fonction</p>';
}

$data = maDeuxiemeFonction();
echo $data;

function br()
{
    echo '<br>';
}

// comprendre le concept d'arguments
// les parametre sont propre à la function
function division ($nombre1,$nombre2)
{
    $resultat = $nombre1 / $nombre2;
    return $resultat;
}
echo division(12,5);


function debug ($tableau){
    echo '<pre>';
    print_r($tableau);
    echo '</pre>';
}

$fruits = array('Banane','Pomme','Kiwi','orange');
debug($fruits);



// Porter des Variables

//$variable = 12 ;
//function testVariable()
//{
//    echo $variable
//}
//testVariable();


$variable = 12 ;
function testVariable()
{
    global $variable;
    echo $variable;
}
testVariable();

echo '</br>';

function maj ($majString)
{
    $lower = mb_strtolower($majString);
    return ucfirst($lower) ;

}

echo maj('FJZNDZdqsdDZJCJNDNCCDAZ');



echo '</br>';


function minus ($str)
{
    return lcfirst(mb_strtoupper($str));
}

echo minus('FERFEAFEAuoivyhubI');

echo '<br>';


function heure ()
{
    echo '<p>'.date('H:i:s').'</p>';
}

echo heure();


$defaults = array('paraisseux','borné','cruel','distrait','ringard','stupide','superficiel','avare','ennuyant','médiocre');
$meals = array('lasagne','kebab','blanquette de veau', 'quiche lorraine','pot au feu','bourgignon','fondue savoyarde','salade de pate','mousse au chocolat','raclette');


function generateGroupName ($plat, $default)
{
    $random_plat = array_rand($plat);
    $random_default = array_rand($default);
    $result = $plat[$random_plat].' '.$default[$random_default];
    return '<div style="background-color: black; text-align: center; color: white;"> '.ucwords($result).'</div>';
}
echo generateGroupName($meals,$defaults);

