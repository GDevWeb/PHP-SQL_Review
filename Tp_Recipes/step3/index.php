<?php

$title = "Projet fil Rouge - Step 3";

$users = [
    [
        'full_name' => 'Mickaël Andrieu',
        'email' => 'mickael.andrieu@exemple.com',
        'age' => 34,
    ],
    [
        'full_name' => 'Mathieu Nebra',
        'email' => 'mathieu.nebra@exemple.com',
        'age' => 34,
    ],
    [
        'full_name' => 'Laurène Castor',
        'email' => 'laurene.castor@exemple.com',
        'age' => 28,
    ],
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?></title>
</head>

<body>

    <ol>

        <li>Utilisez le tableau fourni $users qui contient plusieurs utilisateurs. Chaque utilisateur possède des clés telles que full_name , email et age. </li>
        <li>Ajoutez les fonctions isValidRecipe , getRecipes et displayAuthor.</li>
        <?php

        function isValideRecipe(array $user)
        {
            return array_key_exists('full_name', $user);
        }

        function getRecipes(array $users)
        {
            $recipes = [];
            foreach ($users as $user) {
                $recipes[] = $user['full_name'];
            }
            return $recipes;
        }

        function displayAuthor(array $user)
        {
            echo $user['full_name'] . '- Age: ' . $user['age'];
        }

        
        ?>
        <li>Retirez le test pour savoir si une recette est activée.</li>

        <li>Modifiez la boucle pour utiliser la fonction getRecipes à la place du tableau des recettes.</li>

        <li>Utilisez la fonction displayAuthor pour afficher l'auteur.</li>

        <li>Testez votre page web : assurez-vous que votre page affiche les recettes avec l'auteur et son âge.</li>

    </ol>


</body>

</html>