<?php

require ('inc/function.php');
$title ='Formulaire';


include ('inc/header.php');

debug($_POST);

$errors = array();
$sucess = false;
$colors = array(
    'blue'   => 'Bleu',
    'yellow' => 'Jaune',
    'red'    => 'Rouge'
);
if (!empty($_POST['submitted'])){


    // Faille XSS
    $nom      = trim(strip_tags($_POST['nom']));
    $prenom   = trim(strip_tags($_POST['prenom']));
    $message  = trim(strip_tags($_POST['message']));
    $email    = trim(strip_tags($_POST['email']));
    $couleur  = trim(strip_tags($_POST['couleur']));
    if (empty($colors[$couleur])){
        $errors['couleur'] = 'Veillez renseignez ce champ';
    }
    ///////////////////////////
    //////// VALIDATION ///////
    ///////////////////////////
    $errors = inputError($errors,$nom,'nom',3,50);
    $errors = inputError($errors,$prenom,'prenom',1,11);
    $errors = inputError($errors,$message,'message',10,500);
    $errors = inputError($errors,$couleur,'couleur',2,20);
    $errors = validEmail($errors,$email,'email');

    // si il y'a pas d'erreur
    // if not errors
    if (count($errors) == 0){
        // send email , insert into
        $sucess = true;
    }
}
?>
<!--    Traitement de formulaire   -->
<div class="wrap">

    <?php
    if ($sucess){ ?>
    <p class="sucess">Bravo</p>
    <?php
    }else { ?>
    <form action="" method="post" novalidate>
        <label for="nom">Nom</label>
        <span class="error"><?php if (!empty($errors['nom'])){ echo $errors['nom'];} ?></span>
        <input type="text" name="nom" id="nom" placeholder="Nom" value="<?php if (!empty($_POST['nom'])){ echo $_POST['nom'];}?>">

        <label for="prenom">Prenom</label>

        <span class="error"><?php if (!empty($errors['prenom'])){ echo $errors['prenom'];} ?></span>

                                <!--  Dans la value on sauvegarde la valeur déjà entrer precendant      -->
        <input type="text" name="prenom" id="prenom" placeholder="Prenom" value="<?php if (!empty($_POST['prenom'])){ echo $_POST['prenom'];}?>">

        <label for="message">Message</label>
        <span class="error"><?php if (!empty($errors['message'])){ echo $errors['message'];} ?></span>
        <textarea name="message" id="message" placeholder="Message..." cols="50" rows="10" value="<?php if (!empty($_POST['message'])){ echo $_POST['message'];}?>"></textarea>


        <label for="email">Email</label>
        <span class="error"><?php if (!empty($errors['email'])){ echo $errors['email'];} ?></span>
        <input type="email" name="email" id="email" placeholder="Example@email.com" value="<?php if (!empty($_POST['email'])){ echo $_POST['email'];}?>">


<!--        //////////////////////// SELECT //////////////////////////////////////-->
        <?php



        ?>

        <label for="email">Couleur *</label>
        <select name="couleur">
            <option value="">__ selectionnez __</option>
            <?php foreach ($colors as $key => $value): ?>
                <option value="<?php echo $key; ?>" <?php if(!empty($_POST['couleur'])) { if($_POST['couleur'] == $key) {echo 'selected="selected"';}} ?>><?php echo $value; ?></option>
            <?php endforeach; ?>
        </select>
        <span class="error"><?php if(!empty($errors['couleur'])) { echo $errors['couleur']; } ?></span>


        <input type="submit" name="submitted" value="Envoyer">
    </form>
    <?php
    } ?>
</div>

<?php
// require   /// require_once

include ('inc/footer.php');



