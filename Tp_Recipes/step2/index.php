<?php
$recipes = [
    [
        'title' => 'Cassoulet',
        'recipe' => 'Etape 1 : des flageolets !',
        'author' => 'mickael.andrieu@exemple.com',
        'is_enabled' => true,
    ],
    [
        'title' => 'Couscous',
        'recipe' => 'Etape 1 : de la semoule',
        'author' => 'mickael.andrieu@exemple.com',
        'is_enabled' => false,
    ],
    [
        'title' => 'Escalope milanaise',
        'recipe' => 'Etape 1 : prenez une belle escalope',
        'author' => 'mathieu.nebra@exemple.com',
        'is_enabled' => true,
    ],
];

// Pour chaque recette, vérifiez si la clé  is_enabled  existe dans la recette et si sa valeur est égale à vrai (  true  ).
// Si la recette est activée (  is_enabled  à vrai), affichez le titre, la recette et l'auteur de la recette dans des balises HTML appropriées.

// Testez votre page web : vérifiez que l’affichage est identique à l’image en dessous :

    ?>

<h1>Affichage des recettes</h1>

<?php 
foreach ($recipes as $recipe) {
    
if(array_key_exists('is_enabled', $recipe) && $recipe['is_enabled'] === true){

    echo "<h2>{$recipe['title']}</h2>";
    echo "<p>{$recipe['recipe']}</p>";
    echo "<p>Auteur : {$recipe['author']}</p>";
    echo "<hr>";

}

}
?>


