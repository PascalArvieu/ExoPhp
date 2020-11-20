<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 17</title>
</head>
<body>
    <h1>Exercice 17</h1>
    <p>
    <?php 
    function direPhrase ($nom) {
    return 'Bonjour, mon p’tit '. $nom .'.' ; 
    }
    echo direPhrase ('Robert');
    ?> 
    
</body>
</html>

    <!-- $copyCat = 'Php forever !';
    $copyCat = print ($copyCat);  -->

    <!-- return : permet de stocker la valeur du paramètre de la fonction au sein de la fonction 
    Remplace le ECHO qui est interdit dans l'élaboration de fonction -->