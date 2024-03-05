<?php
// Tableau de recettes :
$recipes = [
    ["Cassoulet", "[...]", "micka@fakemail.com", true],
    ["Tarte aux pommes", "[...]", "john@fakemail.com", false],
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recipes</title>
</head>

<body>
    <h2>Recettes :</h2>
    <ul>
        <?php
        // Boucle for pour parcourir les recettes
        for ($i = 0; $i < count($recipes); $i++) :
        ?>
            <li><?php echo $recipes[$i][0] . ' (' . $recipes[$i][2] . ')'; ?></li>
        <?php endfor; ?>
    </ul>
</body>

</html>
