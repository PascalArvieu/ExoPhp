<?php $dpt = array ('02' => 'Aisne' , '59' => 'Nord' , '60' => 'Oise' , '62' => 'Pas-de-Calais' , '80' => 'Somme');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 16</title>
</head>
<body>
    <h1>Exercice 16</h1>
    
    <?php foreach ($dpt as $dptnumero => $dptname) { ?>
    <p>Le département <?php echo $dptname;?> a le numéro <?php echo $dptnumero;?>. </p>
    <?php } ?>
   
</body>
</html>
