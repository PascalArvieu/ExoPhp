<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 20</title>
</head>
<body>
    <h1>Exercice 20</h1>
    
    <?php
    function polite ($firstName, $name, $age){
        return 'Salut ' . $firstName . ' ' . $name . ', tu as ' . $age . ' ans.';
    }
    
     echo polite ('Jean','Martin', '35');
     ?>
    
</body>
</html>

