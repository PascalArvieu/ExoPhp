<?php
$name = 'Jean-Michel';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 4</title>
</head>
<body>
    <h1>Exercice 4</h1>
    <p><?php echo 'Bonjour ' . $name . ', ça boume ?' ?></p>
    <p>Bonjour <?= $name;?>, ça gazouille ?</p>
</body>
</html>

