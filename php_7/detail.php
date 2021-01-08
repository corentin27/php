<?php
require ('inc/pdo.php');
require ('inc/function.php');





if (!empty($_GET['id']) && is_numeric($_GET['id'])){

    //////// REQUEST SQL //////////

    $id = trim(strip_tags($_GET['id']));
    $sql     =  "SELECT * FROM city WHERE ID = :id";
    $query   =  $pdo->prepare($sql);
    $query   -> bindValue(':id',$id,PDO::PARAM_INT);
    $query   -> execute();
    $details =  $query->fetch();


    //Si détail est vite fait un die 404
    if (empty($details)){
        die('404');
    }







}else {
    die('404');
}




debug($details);

echo '<hr>';





include ('inc/header.php');
?>
<div class="nameVille">
    <h1><?php echo $details['Name'] ?></h1>
</div>
<div class="city">
    <div class="detail"><?php echo $details['CountryCode'] ?></div>
    <div class="detail"><?php echo $details['District'] ?></div>
    <div class="detail"><?php echo $details['Population'] ?></div>
</div>

<?php

include ('inc/footer.php');
