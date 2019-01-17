<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Exercice 3</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <!-- on crée un lien avec des paramètres-->
    <a href="index.php?startDate=2/05/2016&amp;endDate=27/11/2016">Clique</a>
    <?php
        // isset() est une fonction qui vérifie si une variable existe
        // $_GET[] est un tableau associatif qui transite les paramètres par l'URL 
        if (isset($_GET['startDate']) && isset($_GET['endDate'])){
           echo 'Les paramètres sont : ' . $_GET['startDate'] . ' et ' . $_GET['endDate'];
        }
    ?>
</body>
</html>