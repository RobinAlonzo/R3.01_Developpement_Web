<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice2</title>
</head>
<body>
    <?php
    $sommeGlobale = 0;
    $moyenneAge = 0;
    $nbAge = 0;

    $fichier = fopen('fichier.txt','r');
    while (!feof($fichier)) {
        $ligneFichier = fgets($fichier);
        if ($ligneFichier != null) {
            $tableauResultat = explode("|", $ligneFichier);
            $sommeGlobale = $sommeGlobale + intval($tableauResultat[3]);
            $moyenneAge = $moyenneAge + intval($tableauResultat[1]);
            $nbAge ++;
        }
    }
    fclose($fichier);

    $fichier = fopen('fichier.txt','r');
    while (!feof($fichier)) {
        $ligneFichier = fgets($fichier);
        if ($ligneFichier != null) {
            $tableauResultat = explode("|", $ligneFichier);
            $email = $tableauResultat[2];
            $moyenneAge = $moyenneAge / $nbAge;
            mail($email, "Récapitulatif de votre don", "Somme globale : " . $sommeGlobale . " Moyenne d'age : " . $moyenneAge);
        }
    }
    fclose($fichier);
    ?>
</body>
</html>