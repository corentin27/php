<?php
function debug ($array){
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}

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