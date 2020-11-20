<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 8</title>
</head>
<body>
    <h1>Exercice 8</h1>
    <p>
        <?php 
            $age = 11;
            $gender = 'femme';
            
            if ($age >= 18 && $gender == 'homme') 
            {
            echo 'Vous êtes un homme et vous êtes majeur.';
            }
            elseif ($age >= 18 && $gender == 'femme') 
            {
            echo 'Vous êtes une femme et vous êtes majeure.';
            }
            elseif ($age < 18 && $gender == 'homme') 
            {
            echo 'Vous êtes un homme et vous êtes mineur.';
            }
            else 
            {
            echo 'Vous êtes une femme et vous êtes mineure.';
            }
        ?>
    </p>
</body>
</html>