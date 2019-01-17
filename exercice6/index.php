<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Exercice 6</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <!-- on crée un lien avec des paramètres-->
    <a href="index.php?building=12&amp;room=101">Clique</a>
    <?php
        // isset() est une fonction qui vérifie si une variable existe
        // $_GET[] est un tableau associatif qui transite les paramètres par l'URL 
        if (isset($_GET['building']) && isset($_GET['room']))
        {
           echo 'Les paramètres sont : ' . $_GET['building'] . ' et ' . $_GET['room'];
        }
    ?>
</body>
</html>