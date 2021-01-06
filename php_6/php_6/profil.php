<?php
require ('inc/function.php');
$title ='Page profil';

debug($_GET);
br();

if (!empty($_GET['nom']) && !empty($_GET['prenom'])){

}else {
    die('404');
}


include ('inc/header.php');


?>
    <hr>
    <br>


    <h1>Profil</h1>

    <br>


<p>Nom : <?php echo $_GET['nom']?> </p>
<p>Prenom : <?php echo $_GET['prenom']?></p>


<?php


include ('inc/footer.php');