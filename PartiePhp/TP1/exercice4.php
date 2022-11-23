<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice4</title>
</head>
<body>
<?php
    $nombre = file('compteur.txt'); //On met la valeur dans un tableau
    $compteur = intval($nombre[0]) + 1;  //Incrémentation du compteur
    $fichier = fopen('compteur.txt','w');
    fwrite($fichier, "$compteur \n");
    fclose($fichier);
    print 'Vous êtes le '. $compteur . ' ième visiteur :)!';
?>
</body>
</html>