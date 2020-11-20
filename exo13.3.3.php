<?php 
$months = array ('Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 13</title>
</head>
<body>
    <h1>Exercice 13</h1>

<!-- Utilisation du "for" conseillé quand on doit utiliser CERTAINES données du tableau-->

    <?php for ($i=0; $i<=11; $i++) { ?>
    <p> <?php echo $months [$i] ?></p>
    <?php } ?>


<!-- Utilisation du "foreach" conseillé quand on doit utiliser TOUTES les données-->

    <?php foreach ($months as $monthSingulier){ ?>
       <p> <?= $monthSingulier; ?> </p>
       <?php } ?>

</body>
</html>