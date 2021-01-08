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

function paginationColumn ($selectCount, $fromTable, $page, $perPage,$href ){
    global $pdo;
    $sql = "SELECT COUNT($selectCount) FROM $fromTable";
    $query = $pdo->prepare($sql);
    $query->execute();
    $count = $query->fetchColumn();

    if ($page > 1 ){ ?>
        <a href="<?php echo $href; echo $page - 1;?>">Précédent</a>
    <?php }

    if ($page * $perPage < $count){ ?>
        <a href="<?php echo $href; echo $page + 1; ?>">Suivant</a>


    <?php }//

}