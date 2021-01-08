<?php

require ('inc/pdo.php');
require ('inc/function.php');


debug($_POST);
$errors = array();
$sucess = false;


if (!empty($_POST['submitted'])){

    $author = trim(strip_tags($_POST['author']));
    $m_reve   = trim(strip_tags($_POST['reve']));

    $errors = inputError($errors,$author,'author', 2,20);
    $errors = inputError($errors,$m_reve,'m_reve', 2,255);

    if (count($errors)== 0){

        $sql = "INSERT INTO reves (author,reve,created_at)
                     VALUES (:author,:reve,NOW())";
        $query = $pdo->prepare($sql);
        $query -> bindValue(':author',$author,PDO::PARAM_STR);
        $query -> bindValue(':reve',$m_reve,PDO::PARAM_STR);
        $query->execute();
        $sucess = true;
        header("location: index.php");
    }

}

debug($errors);


include ('inc/header.php');

?>

<form action="" method="post" novalidate>
    <label for="author">Auteur</label>
    <span class="error"><?php if (!empty($errors['author'])){ echo $errors['author'];}?></span>
    <input type="text" name="author" id="author" value="<?php if (!empty($_POST['author'])){ echo $_POST['author']; } ?>">

    <label for="reve">Rêve</label>
    <span class="error"><?php if (!empty($errors['m_reve'])){ echo $errors['m_reve'];}?></span>
    <input type="text" name="reve" id="reve" value="<?php if (!empty($_POST['reve'])){ echo $_POST['reve']; } ?>">

    <input type="submit" name="submitted" value="Envoyer">
</form>





<?php

include ('inc/footer.php');