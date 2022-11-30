<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice1</title>
</head>
<body>
    <form ACTION="./exercice1.php" METHOD="post">
        <p>Saisissez votre nom :</p>
        <input type="text" name="nom" SIZE="20"><br>
        <p>Saisissez votre Age :</p>
        <input type="number" name="age" SIZE="20"><br>
        <p>Saisissez votre mail :</p>
        <input type="email" name="email" SIZE="20"><br>     
        <p>Saisissez votre Don :</p>
        <input type="number" name="don" SIZE="20"><br>                       
        <input type="submit" VALUE="Soumettre">
    </form>
    <p><a href="exercice2.php">Resultats</p>
    <?php

    if ($_POST != null && $_POST["nom"] != null) {
        $nom = $_POST["nom"];
        $age = $_POST["age"];
        $email = $_POST["email"];
        $don = $_POST["don"];
        $fichier = fopen('fichier.txt','a');
        fwrite($fichier, "$nom | $age | $email | $don\n");
        fclose($fichier);        
    }
    
    ?>
</body>
</html>