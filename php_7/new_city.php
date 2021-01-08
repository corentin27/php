<?php

require('inc/pdo.php');
require('inc/function.php');

$errors = array();
$sucess = false;
debug($_POST);
// Si form soumis


if (!empty($_POST['submitted'])) {

    /////////////////////////////////////////
    /// Faille xss
    ////////////////////////////////////////
    $name       = trim(strip_tags($_POST['name']));
    $country    = trim(strip_tags($_POST['CountryCode']));
    $district   = trim(strip_tags($_POST['district']));
    $population = trim(strip_tags($_POST['population']));
    //////// REQUEST SQL //////////

//    $id = trim(strip_tags($_GET['id']));
//    $sql     =  "SELECT * FROM city WHERE ID = :id";
//    $query   =  $pdo->prepare($sql);
//    $query   -> bindValue(':id',$id,PDO::PARAM_INT);
//    $query   -> execute();
//    $details =  $query->fetch();


    $errors = inputError($errors, $name, 'Name', 2, 35);


    if(!empty($country)) {
        if(mb_strlen($country) != 3) {
            $errors['CountryCode'] = 'Mettre 3 caractères exactement';
        }
    } else {
        $errors['CountryCode'] = 'Veuillez renseigner ce champ';
    }

    if(!empty($population)) {
        if(!filter_var($population,FILTER_VALIDATE_INT)) {
            $errors['population'] = 'Veuillez renseigner un nombre entier';
        } elseif($population <= 0) {
            $errors['population'] = 'Veuillez renseigner un nombre positif';
        } elseif(mb_strlen($population) > 11) {
            $errors['population'] = 'Population trop grande';
        }
    } else {
        $errors['population'] = 'Veuillez renseigner ce champ';
    }




    if (count($errors) == 0) {
        // send email , insert into

        $sql     =  "INSERT INTO city (Name,CountryCode,District,Population)
                     VALUES (:name,:code,:district,:pop)";
        $query   =  $pdo->prepare($sql);
        $query   -> bindValue(':name',$name,PDO::PARAM_STR);
        $query   -> bindValue(':code',$country,PDO::PARAM_STR);
        $query   -> bindValue(':district',$district,PDO::PARAM_STR);
        $query   -> bindValue(':pop',$population,PDO::PARAM_INT);
        $query   -> execute();
        $sucess = true;
    }
    //'href=";detail.php?id='
    $last_id = $pdo ->lastInsertId();
    //header("refresh:2url=detail.php?id=$last_id");
    header("location: detail.php?id=$last_id");
}
debug($_POST);
debug($errors);
//else {
//    die('404');
//}

// validation d chacun des champs

// si pas erreur

// INSERT INTO




include ('inc/header.php');
?>

<h1>Ajouter une ville</h1>

<div class="wrap">
    <form action="" method="post" novalidate>
        <label for="name">Name</label>
        <span class="error"><?php if (!empty($errors['Name'])){ echo $errors['Name'];} ?></span>
        <input type="text" name="name" id="name" placeholder="Ville" value="<?php if (!empty($_POST['name'])){ echo $_POST['name'];}?>">


        <label for="country">Country</label>
        <span class="error"><?php if (!empty($errors['CountryCode'])){ echo $errors['CountryCode'];} ?></span>
        <input type="text" name="CountryCode" id="country" placeholder="Country" value="<?php if (!empty($_POST['CountryCode'])){ echo $_POST['CountryCode'];}?>">

        <label for="district">District</label>
        <span class="error"><?php if (!empty($errors['district'])){ echo $errors['district'];} ?></span>
        <input type="text" name="district" id="district" placeholder="Country" value="<?php if (!empty($_POST['district'])){ echo $_POST['district'];}?>">

        <label for="population">Population</label>
        <span class="error"><?php if (!empty($errors['population'])){ echo $errors['population'];} ?></span>
        <input type="number" name="population" id="population" placeholder="Population" value="<?php if (!empty($_POST['population'])){ echo $_POST['population'];}?>">


        <input type="submit" name="submitted" value="Envoyer">
    </form>
</div>




<?php

include ('inc/footer.php');