<?php

require ('inc/pdo.php');
require ('inc/function.php');

$sql = "SELECT * FROM reves ORDER BY created_at DESC LIMIT 10";
$query = $pdo->prepare($sql);
$query->execute();
$reves = $query->fetchAll();

//debug($reves);


debug($reves);



include ('inc/header.php');

foreach ($reves as $reve){?>
    <div class="reves">
        <p class="author"><?php echo $reve['author']; ?></p>
        <p class="reve"><?php echo $reve['reve']; ?></p>
        <p class="date"><?php echo date('j/n/Y H:i', strtotime($reve['created_at'])); ?></p>
        <a href="likes.php?id=<?php echo $reve['id']; ?>">Like <?php echo $reve['likes']; ?></a>
        <a href="dislikes.php?id=<?php echo $reve['id']; ?>">Dislike <?php echo $reve['dislikes']; ?></a>
        <a href="add.php">add</a>
        <br>
    </div>


<?php }






include ('inc/footer.php');


