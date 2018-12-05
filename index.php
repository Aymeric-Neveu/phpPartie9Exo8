<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exercice 7</title>
  </head>
  <body>
    <?php
    $date = new DateTime('now -20days');
    echo $date->format('d M Y');
    ?>
  </body>
</html>
