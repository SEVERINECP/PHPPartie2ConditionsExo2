<?php
$gender = 'Woman';
$age = 20;
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>PHPPartie2Exo2</title>
</head>
<body>
  <p>
    <?php
    if ($age > 0 && $age < 100){
      if ($gender == 'Man' && $age >= 18){
        ?>
        Vous êtes un homme et vous êtes majeur
      <?php }elseif($gender == 'Man' && $age < 18) { ?>
        Vous êtes un homme et vous êtes mineur
      <?php }elseif($gender == 'Woman' && $age >= 18) { ?>
        Vous êtes une femme et vous êtes majeure
      <?php }elseif($gender == 'Woman' && $age < 18) { ?>
        Vous êtes une femme et vous êtes mineure
      <?php }else{ ?>
        erreur le genre n'est pas valide
        <?php
      }
    }else{
      ?>
      age non valide
    <?php } ?>
  </p>
</body>
</html>
