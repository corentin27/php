<?php
////////////////////////////////////////////////////////////
//////////////// Function Utilisateur //////////////////////
/// ////////////////////////////////////////////////////////
/// Ne jamais faire confiance à l'utilisateur            ///
/// Don't repeat yourself                                ///
////////////////////////////////////////////////////////////


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











