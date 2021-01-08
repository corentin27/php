<?php

function debug ($array){
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}

function br(){
    echo '<br>';
}


//    function xss ($k,$key){
//        $k  = trim(strip_tags($_POST[$key]));
//    }
//    xss(,'message');

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





//         validEmail SANS FUNCTION

//    if (!empty($email)){
//        if (!filter_var($email,FILTER_VALIDATE_EMAIL)){
//            $errors['email'] =  'Non Valide';
//        }
//    } else {
//        $errors['email'] = 'Veuillez renseigner ce champ';
//    }



//  validation des input TEXT
function inputError ($errors,$data,string $key,int $min,int $max){

    ////////////////////////////////////////
    if (!empty($data)){
        if (mb_strlen($data) < $min){
            $errors[$key] = 'Veuillez renseigner '.$min.' caractère(s) minimum';

        } elseif (mb_strlen($data) > $max){
            $errors[$key] = 'Veuillez renseigner moins de '.$max.' caractères';
        }
    }else {
        $errors[$key] = 'Veuillez renseigner ce champ';
    }
    return $errors;
}

// Validation d'email
function validEmail ($errors, $data, $key ){
    if (!empty($data)){
        if (!filter_var($data,FILTER_VALIDATE_EMAIL)){
            $errors[$key] =  'Non Valide';
        }
    } else {
        $errors[$key] = 'Veuillez renseigner ce champ';
    }
    return $errors;
}