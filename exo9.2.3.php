<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 9</title>
</head>
<body>
    <h1>Exercice 9</h1>
    <p>
        <?php 
            $gender = 'femme';
            
            if ($gender != 'homme') 
            {
                echo 'C’est une développeuse !!!';
            }      

            else 
            {
            echo 'C’est un développeur !!!';
            }
        ?>
    </p>
</body>
</html>