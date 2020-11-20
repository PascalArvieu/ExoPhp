<?php $age = 18; ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 7</title>
</head>
<body>
    <h1>Exercice 7</h1>

    <?php if($age >= 18 && $age < 130){ ?>
            <p>Vous êtes majeur</p>
        <?php } elseif($age <18 && $age > 0) { ?>
            <p>Vous n’êtes pas majeur</p>
        <?php } 
    ?>
        
</body>
</html>

