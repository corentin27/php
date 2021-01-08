<?php

require ('inc/pdo.php');
require ('inc/function.php');

$sql = "SELECT * FROM reves ORDER BY created_at DESC LIMIT 10";
$query = $pdo->prepare($sql);
$query->execute();
$reves = $query->fetchAll();

//debug($reves);
$page    = 1;
$offset  = 0;
$perPage = 3;




$sql = "SELECT * FROM reves ORDER BY created_at DESC LIMIT $perPage OFFSET $offset";
$query = $pdo->prepare($sql);
$query->execute();
$reves = $query->fetchAll();


$sql = "SELECT COUNT(id) FROM reves";
$query = $pdo->prepare($sql);
$query->execute();
$count = $query->fetchColumn();


//function paginationColumn ($selectCount, $fromTable, $page, $perPage,$href ){
//    global $pdo;
//    if (!empty($_GET['page'])){
//        $page = $_GET['page'];
//        $offset = ($page - 1 ) * $perPage;
//    }
//
//    $sql = "SELECT COUNT($selectCount) FROM $fromTable";
//    $query = $pdo->prepare($sql);
//    $query->execute();
//    $count = $query->fetchColumn();
//
//    if ($page > 1 ){ ?>
<!--        <a href="--><?php //echo $href; echo $page - 1;?><!--">Précédent</a>-->
<!--    --><?php //}
//
//    if ($page * $perPage < $count){ ?>
<!--        <a href="--><?php //echo $href; echo $page + 1; ?><!--">Suivant</a>-->
<!---->
<!---->
<!--    --><?php //}//
//
//}


include ('inc/header.php');


?>
    <ul class="pagination">
        <?php paginationColumn('id', 'reves', 1, 3, 'index.php?page='); ?>
    </ul>

    <ul class="pagination">
        <?php if ($page > 1 ){ ?>
        <a href="index.php?page=<?php echo $page - 1;?>">Précédent</a>
        <?php }

         if ($page * $perPage < $count){ ?>
        <a href="index.php?page=<?php echo $page +1; ?>">Suivant</a>


        <?php }?>
    </ul>


<?php foreach ($reves as $reve){?>
    <div class="reves">
        <p class="author"><?php echo $reve['author']; ?></p>
        <p class="reve"><?php echo $reve['reve']; ?></p>
        <p class="date"><?php echo date('j/n/Y H:i', strtotime($reve['created_at'])); ?></p>
        <a href="likes.php?id=<?php echo $reve['id']; ?>&page=<?php echo $page; ?>">Like <?php echo $reve['likes']; ?></a>
        <a href="dislikes.php?id=<?php echo $reve['id']; ?>&page=<?php echo $page; ?>">Dislike <?php echo $reve['dislikes']; ?></a>
        <a href="add.php">add</a>
        <br>
    </div>


<?php }






include ('inc/footer.php');


