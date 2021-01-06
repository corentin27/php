<?php

function debug ($array){
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}

function br(){
    echo '<br>';
}


function afficheFilm ($id,$title)
{
    return '<img href="detail.php" src="http://www.weblitzer.fr/formation/posters/'.$id.'.jpg" alt="'.$title.'">';
}