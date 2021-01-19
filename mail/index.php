<?php

$to = "john.doe@gmail.com";
$subject = "bonjour";
$message = "comment-vas tu ?";
$header = "from:cazimir@gmail.com";
mail($to,$subject,$message,$headers);

$to = "john.doe@gmail.com,jane.doe@gmail.com";
$subject = "bonjour ma nouvelle promo";
$message = '<html>
<style>
img {
margin: 1rem;
}
</style>
<h1>Coucou</h1>
<img src="https://picsum.photos/200/300" alt="random">

</html>';

$header = "MINE-Version: 1.0"."\r\n";
$header .= "Content-type:text/html;charset=UTF-8"."\r\n";
$headers .= "Cc:dzdzdzdez@gmail.com";
$headers .= "Cci:dzdzdzdez@gmail.com";