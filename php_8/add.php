<?php

require ('inc/pdo.php');
require ('inc/function.php');

$sql = "SELECT * FROM reves ORDER BY created_at DESC LIMIT 10";
$query = $pdo->prepare($sql);
$query->execute();
$reves = $query->fetchAll();

debug($_POST);
$errors = array();
$sucess = false;


if (!empty($_POST['submitted'])){

    $author = trim(strip_tags($_POST['author']));
    $reve  = trim(strip_tags($_POST['reves']));

    $errors = inputError($errors,$author,'author', 2,20);
    $errors = inputError($errors,$reve,'author', 2,255);

    if (count($errors)== 0){

        $sql = "INSERT INTO reves (author,reve,created_at)
                     VALUES (:author,:reve,:created_at)";
        $query = $pdo->prepare($sql);
        $query -> bindValue(':author',$author,PDO::PARAM_STR);
        $query -> bindValue(':reve',$reve,PDO::PARAM_STR);
        $query -> bindValue(':date',PDO::);
        $query->execute();
        $reves = $query->fetchAll();
    }

}




include ('inc/header.php');

?>

<form action="" method="post">
    <label for="author">Auteur</label>
    <input type="text" name="author" id="author" value="<?php if (!empty($_POST['author'])){ echo $_POST['author']; } ?>">

    <label for="reve">Rêve</label>
    <input type="text" name="reve" id="reve">

    <input type="submit" value="submitted">
</form>





<?php

include ('inc/footer.php');