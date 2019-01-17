<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Exercice 5</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <!-- on crée un lien avec des paramètres-->
    <a href="index.php?week=12">Clique</a>
    <?php
        // isset() est une fonction qui vérifie si une variable existe
        // $_GET[] est un tableau associatif qui transite les paramètres par l'URL 
        if (isset($_GET['week'])){
           echo 'Le paramètre est : ' . $_GET['week'];
        }
    ?>
</body>
</html>