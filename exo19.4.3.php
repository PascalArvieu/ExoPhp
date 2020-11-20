<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 18</title>
</head>
<body>
    <h1>Exercice 19</h1>
    
    <p> <?php
    function compare($n1, $n2) 
    {
    if ($n1 > $n2)
    return 'Le premier nombre est plus grand'; 
    if ($n1 < $n2)
    return 'Le premier nombre est plus petit'; 
    if ($n1 == $n2)
    return 'Les deux nombres sont identiques'; 
    }

    echo compare(1,5);
    ?> <p>
    
</body>
</html>