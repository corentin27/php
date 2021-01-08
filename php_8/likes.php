<?php

require ('inc/pdo.php');
require ('inc/function.php');

$sql = "SELECT * FROM reves ORDER BY created_at DESC LIMIT 10";
$query = $pdo->prepare($sql);
$query->execute();
$reves = $query->fetchAll();

//debug($reves);

if (!empty($_GET['id']) && is_numeric($_GET['id'])){


    $id = trim(strip_tags($_GET['id']));
    $sql      =  "SELECT * FROM reves WHERE id = :id";
    $query    =  $pdo->prepare($sql);
    $query    -> bindValue(':id',$id,PDO::PARAM_INT);
    $query    -> execute();
    $likes    =  $query->fetch();

    if (!empty($likes)){// si $like n'est pas vide

        $sql        =   "UPDATE reves SET likes = likes +1 WHERE id = :id";
        $query      =   $pdo->prepare($sql);
        $query     ->   bindValue(':id',$id,PDO::PARAM_INT);
        $query     ->   execute();


    } else { // si like est vide
        die('404');
    }






    header("location: index.php");

}else {
    die('404');
}




include ('inc/header.php');








include ('inc/footer.php');