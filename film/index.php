<?php
require ('inc/function.php');
require ('inc/data.php');
$title ='home';


include ('inc/header.php');





//function linkFilm ($par)
//{
//    return '';
//}

echo debug($movies);
foreach ($movies as $film)
{
    //echo '<div><img src="http://www.weblitzer.fr/formation/posters/'.$film['id'].'.jpg"></div>';
    echo '<div class="film"><h2>'.$film['title'].'</h2><a href="detail.php?id='.$film['id'].'">'.afficheFilm($film['id'],$film['title']).'</a></div>';
}


?>

    <h1>HOME</h1>

<?php
// require   /// require_once

include ('inc/footer.php');