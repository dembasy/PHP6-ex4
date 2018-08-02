<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>exercice 3</title>
  </head>
  <body>
      <p>
      <?php
      //grâce a la condition et a isset on va pouvoir recuperer le server et le language pour l'afficher
        if (isset($_GET['language']) && isset($_GET['server'])) {
        echo $_GET['language'] . ' ' . $_GET['server'];
      }
      ?>
      </p>
  </body
</html>