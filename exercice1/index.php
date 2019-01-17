<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Exercice 1</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <!-- on crée un lien avec des paramètres-->
    <a href="index.php?lastname=Nemare&amp;firstname=Jean">Clique</a>
    <?php
        // isset() est une fonction qui vérifie si une variable existe
        // $_GET[] est un tableau associatif qui transite les paramètres par l'URL (variable superglobale)
       if (isset($_GET['lastname']) && isset($_GET['firstname'])){
           echo 'Les paramètres sont : ' . $_GET['lastname'] . ' ' . $_GET['firstname'];
       }
    ?>
</body>
</html>