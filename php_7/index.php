<?php

require ('inc/pdo.php');
require ('inc/function.php');
require ('vendor/autoload.php');

use JasonGrimes\Paginator;

$itemsPerPage = 50;
$currentPage = 1;
$urlPattern = '?page=(:num)';
$offset = 0;

if (!empty($_GET['page'])){
    $currentPage = $_GET['page'];
     $offset = ($currentPage - 1 ) * $itemsPerPage;
}




// Je fais ma request(requête) SQL
$sql   = "SELECT * FROM city ORDER BY Name ASC LIMIT 30";
// Je preparee ma request avant de l'executer
$query = $pdo->prepare($sql);
// J'execute ma request vers ma BDD (Base De Donnée)
$query->execute();
// recupérer les resultats
$villes = $query->fetchAll();   // fetchAll() va tout recuperer
                                // fetch() va juste recuperer un element
                                // fetch column() va recuperer une colonne précise
// debug($villes);

// request count ville

$sql   = "SELECT COUNT(ID) FROM city ";
$query = $pdo->prepare($sql);
$query->execute();
$count = $query->fetchColumn();






include ('inc/header.php');


echo '<p>Nombre Total de villes : '.$count.'</p>';
echo '<hr>';
foreach ($villes as $ville){
    echo '<p>'.$ville['Name'].'</p>';
    echo '<ul>';
    echo '<a href="detail.php?id='.$ville['ID'].'">Voir plus</a>';
    echo '</ul>';
}






include ('inc/footer.php');


