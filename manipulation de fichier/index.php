<?php

$monFichier = fopen("monDossier/monfichier.php","r");

$maVar = fwrite($monFichier,filesize("monDossier/monfichier.php"));
fclose($monFichier);
echo $maVar;

unlink("monDossier/monfichier.php"); // va supprimer monfichier