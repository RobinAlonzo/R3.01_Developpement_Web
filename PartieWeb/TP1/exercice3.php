<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice3</title>
</head>
<body>
    <?php 
    if (($fichier = fopen("restos.csv", "r")) !== FALSE) {
        while (($tableau = fgetcsv($fichier, 1000, ";")) !== FALSE) {
            $num = count($tableau);
            for ($i=0;$i < $num; $i++) { 
                print $tableau[$i] . "<br />\n";
            }
            print "<HR>";
        }
        fclose($fichier);
    }

    ?> 
</body>
</html>