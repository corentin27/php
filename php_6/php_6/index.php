<?php

require ('inc/function.php');
$title ='Formulaire';


include ('inc/header.php');

debug($_POST);

$errors = array();

if (!empty($_POST['submitted'])){


    // validation
    // renseignement, minimum 3 caractères, max de 50 caractères
    // VERSION SANS FUNCTION
//    if (!empty($nom)){
//        if (mb_strlen($nom) < 3){
//            $errors['nom'] = 'Veuillez renseigner 3 caractères minimum';
//
//        } elseif (mb_strlen($nom) > 50 ){
//            $errors['nom'] = 'Veuillez renseigner moins de 50 caractères';
//        }
//    }else {
//        $errors['nom'] = 'Veuillez renseigner ce champ';
//    }
//




    function inputText (string $key,int $min,int $max):void{
        global $errors;
        ////////////////////////////////////////
        //    faille XSS
        $nom = trim(strip_tags($_POST[$key]));
        ////////////////////////////////////////
        if (!empty($nom)){
            if (mb_strlen($nom) < $min){
                $errors[$key] = 'Veuillez renseigner '.$min.' caractère(s) minimum';

            } elseif (mb_strlen($nom) > $max){
                $errors[$key] = 'Veuillez renseigner moins de '.$max.' caractères';
            }
        }else {
            $errors[$key] = 'Veuillez renseigner ce champ';
        }
    }

    inputText('nom',3,50);
    inputText('prenom',1,11);
    inputText('prenom',1,10);

}
?>
<!--    Traitement de formulaire   -->
<div class="wrap">
    <form action="" method="post">
        <label for="nom">Nom</label>
        <span class="error"><?php if (!empty($errors['nom'])){ echo $errors['nom'];} ?></span>
        <input type="text" name="nom" id="nom" value="<?php if (!empty($_POST['nom'])){ echo $_POST['nom'];}?>">

        <label for="prenom">Prenom</label>
        <span class="error"><?php if (!empty($errors['prenom'])){ echo $errors['prenom'];} ?></span>
        <input type="text" name="prenom" id="prenom" value="<?php if (!empty($_POST['prenom'])){ echo $_POST['prenom'];}?>">

        <label for="message">Message</label>
        <span class="error"><?php if (!empty($errors['message'])){ echo $errors['message'];} ?></span>
        <textarea name="message" id="message" cols="50" rows="10" value="<?php if (!empty($_POST['message'])){ echo $_POST['message'];}?>"></textarea>
        <input type="submit" name="submitted" value="Envoyer">
    </form>
</div>

<?php
// require   /// require_once

include ('inc/footer.php');



