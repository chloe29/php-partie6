<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Exercice 2</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <!-- on crée un lien avec des paramètres-->
    <a href="index.php?lastname=Nemare&amp;firstname=Jean">Clique</a>
    <?php
        // isset() est une fonction qui vérifie si une variable existe
        // $_GET[] est un tableau associatif qui transite les paramètres par l'URL (variable superglobale)
        if (isset($_GET['age'])){
           echo 'Le paramètre est : ' . $_GET['age'];
        }else{
            echo 'Le paramètre n\'existe pas';
        }
    ?>
</body>
</html>