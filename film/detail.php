<?php
require ('inc/function.php');
require ('inc/data.php');
//$title = $_GET['title'];

debug($_GET);



if (!empty($_GET['id']) && is_numeric($_GET['id'])){
    $id = $_GET['id'];
    $currentFilm = array();
    foreach ($movies as $key => $movie){
        if ($movie['id'] == $id){
            $currentFilm = $movie;
            $currentKey = $key;
        }
    }
    if (empty($currentFilm)){
        die('404');
    }
}else {
    die('404');
}






include ('inc/header.php');
debug($currentFilm);

?>
    <hr>
    <br>




<div>
    <h1><?php echo $currentFilm['title']?></h1>
    <div><?php echo afficheFilm($currentFilm['id'], $currentFilm['title'])?>
    <div>Année : <?php echo $currentFilm['year']?></div>
    <div>Auteur : <?php echo $currentFilm['directors']?></div>
    <div>Durée : <?php echo $currentFilm['rating']?> Minutes</div>
    </div>
</div>

<?php
if ($currentKey < 0){
    $keyPrevious = $currentKey - 1;?>
    <a href="detail.php?id=<?php echo $movies[$keyPrevious]['id']?>">Previous</a>
<?php }
if ($currentKey < count($movies)-1){
    $keyNext = $currentKey + 1;?>
    <a href="detail.php?id=<?php echo $movies[$keyNext]['id']?>">Next</a>
<?php }



include ('inc/footer.php');
