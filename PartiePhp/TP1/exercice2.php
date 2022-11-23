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
        #Variables
        $tableau = explode(".", $_SERVER['REMOTE_ADDR']);

        switch ($tableau[0]) {
            case $tableau[0] < 128:
                print "Adresse : " . $_SERVER['REMOTE_ADDR'] . "(Classe A)";
                break;

            case $tableau[0] > 127 && $tableau[0] < 193:
                print "Adresse : " . $_SERVER['REMOTE_ADDR'] . "(Classe B)";
                break;  
                
            case $tableau[0] > 192:
                print "Adresse : " . $_SERVER['REMOTE_ADDR'] . "(Classe C)";
                break;                
            
            default:
                # code...
                break;
        }
        
    ?> 
</body>
</html>