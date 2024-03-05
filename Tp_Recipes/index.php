<?php
$title = "Projet fil Rouge - Recipes";
$recipes = [

    ["Pattes carbonara", "Francky Spaghetti"],
    ["Grattin Dauphinois", "Léo Marco"],
    ["Tarte aux Fraises", "Cerise Myrtille"],
    ["Tarte au citron", "Lemon Line"],
];

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php echo $title; ?></title>
</head>

<body>

    <h1><?php echo $title ?></h1>
    <ul>
        <h2>Liste des recettes et leurs auteurs :</h2>
        <?php
        for ($i = 0; $i < count($recipes); $i++) :
        ?>

            <li><strong>Nom de la recette:</strong><br> <?php echo $recipes[$i][0]  ?><br>
                <strong> Auteur de la recette :</strong><br> <?php echo $recipes[$i][1]  ?><br>
            </li>

        <?php endfor; ?>

    </ul>


</body>

</html>