<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 22</title>
</head>
<body>
    <h1>Exercice 22</h1>
<?php 
    for ($n = 1; $n <= 100; $n++) { 
        if ($n % 3 == 0 && $n % 5 != 0)
        echo '<p>'.'Fizz'.'</p>'; 
        elseif ($n % 5 == 0  && $n % 3 != 0)
        echo '<p>'.'Buzz'.'</p>'; 
        elseif ($n % 3 == 0 && $n % 5 == 0)
        echo '<p>'.'Fizz-Buzz'.'</p>'; 
        else
        echo '<p>'.$n.'</p>'; 
    } 
?> 
</body>
</html>
