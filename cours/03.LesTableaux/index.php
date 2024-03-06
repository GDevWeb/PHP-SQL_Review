<?php

$title = "Les tableaux";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?></title>
</head>

<body>

    <main>

        <h1><?php echo $title ?></h1>

        <div class="blocText">
            <p>Nous allons détailler ici l'une des fonctionnalités introduites dans le chapitre précédent : les tableaux (ou « arrays », en anglais).</p>
            <p>Il s'agit en fait de variables « composées », que l'on peut imaginer sous la forme de tableaux.</p>
        </div>

        <div class="blocText">

            <h2>Les 2 types de tableaux en PHP</h2>

            <h3>Les tableaux numérotés</h3>

            <p>clé et valeur</p>

            <h4>Construisez un tableau numéroté</h4>
            <p>Pour créer un tableau numéroté en PHP, on liste ses valeurs entre crochets[] .</p>

            <p>Cet exemple vous montre comment créer l'array $recipes :</p>

            <?php

            $recipes = ['Cassoulet', 'Couscous', 'Escalope Milanaise'];

            // La fonction array permet aussi de créer un array
            $recipes = array('Cassoulet', 'Couscous', 'Escalope Milanaise');

            ?>

            <h4>L'ordre a beaucoup d'importance :</h4>

            <p>Le premier élément (« Cassoulet») aura l'indice 0.</p>

            <?php
            $recipes[0] = 'Cassoulet';
            $recipes[1] = 'Couscous';
            $recipes[2] = 'Escalope Milanaise';
            ?>

            <?php
            echo $recipes[1]; // Cela affichera : Couscous
            ?>

            <p>Ensuite Couscous l'indice 1.</p>

            <p>Si vous ne voulez pas avoir à écrire vous-même l'indice de la case que vous créez, vous pouvez laisser PHP le sélectionner automatiquement en laissant les crochets vides :</p>

            <?php
            $recipes[] = 'Cassoulet'; // Créera $recipes[0]
            $recipes[] = 'Couscous'; // Créera $recipes[1]
            $recipes[] = 'Escalope Milanaise'; // Créera $recipes[2]

            ?>

        </div>

        <h2>Les tableaux associatifs</h2>

        <p>Les tableaux associatifs fonctionnent sur le même principe, sauf qu'au lieu de numéroter les cases, on va les étiqueter en leur donnant à chacune un nom différent.</p>

        <h3>Créer un tableau associatif :</h3>

        <?php
        $recipes = [
            "title" => "Cassoulet",
            "recipe" => "Étape 1 : Flageolets, ...",
            "author" => "johnDoe@fakemail.com",
            "enabled" => true,
        ];

        ?>

        <h4>Afficher le titre :</h4>
        <?php echo $recipes["title"] ?>

        <h4>Observations :</h4>
        <ul>

            <li>Les tableaux numérotés permettent de stocker une série d'éléments du même type, comme des prénoms. Chaque élément du tableau contiendra alors un prénom.</li>

            <li>Les tableaux associatifs permettent de découper une donnée en plusieurs sous-éléments. Par exemple, une adresse peut être découpée en nom, prénom, nom de rue, ville… </li>
        </ul>

        <h2>Parcourir un tableau</h2>

        <p>Lorsqu'un tableau a été créé, on a souvent besoin de le parcourir pour savoir ce qu'il contient. Nous allons voir trois moyens d'explorer un tableau :</p>

        <ul>
            <li>La boucle for .</li>

            <li>La boucle foreach .</li>

            <li>La fonction print_r (utilisée principalement pour le débogage).</li>
        </ul>

        <h3>Avec la boucle for</h3>

        <?php

        /**
         * Déclaration du tableau des recettes
         * Chaque élément du tableau est un tableau numéroté (une recette)
         */
        $recipes = [
            ['Cassoulet', '[...]', 'mickael.andrieu@exemple.com', true,],
            ['Couscous', '[...]', 'mickael.andrieu@exemple.com', false,],
        ];

        for ($lines = 0; $lines <= 1; $lines++) {
            echo $recipes[$lines][0];
        }
        ?>

        <h3>Avec la boucle forEach</h3>

        <p>La boucle for a beau fonctionner, on peut utiliser un autre type de boucle – plus adapté aux tableaux – qu'on n'a pas encore vu jusqu'ici : foreach .</p>

        <p> foreach passe en revue chaque ligne du tableau. Lors de chaque passage, elle met la valeur de cette ligne dans une variable temporaire (par exemple $element ).</p>


        <?php

        $recipes = [
            [
                'title' => 'Cassoulet',
                'recipe' => '',
                'author' => 'mickael.andrieu@exemple.com',
                'is_enabled' => true,
            ],
            [
                'title' => 'Couscous',
                'recipe' => '',
                'author' => 'mickael.andrieu@exemple.com',
                'is_enabled' => false,
            ],
            [
                'title' => 'Escalope milanaise',
                'recipe' => '',
                'author' => 'mathieu.nebra@exemple.com',
                'is_enabled' => true,
            ],
            [
                'title' => 'Salade Romaine',
                'recipe' => '',
                'author' => 'laurene.castor@exemple.com',
                'is_enabled' => false,
            ],
        ];

        foreach ($recipes as $recipe) {
            foreach ($recipe as $property => $propertyValue) {
                echo '[' . $property . '] vaut ' . $propertyValue . PHP_EOL;
            }
        }
        ?>

        <h3>Afficher rapidement un tableau avec print_r</h3>

        <?php

        $recipes = [
            [
                'title' => 'Cassoulet',
                'recipe' => '',
                'author' => 'mickael.andrieu@exemple.com',
                'is_enabled' => true,
            ],
            [
                'title' => 'Couscous',
                'recipe' => '',
                'author' => 'mickael.andrieu@exemple.com',
                'is_enabled' => false,
            ],
        ];

        echo '<pre>';
        print_r($recipes);
        echo '</pre>';

        ?>

        <h3>Rechercher dans un tableau</h3>
        <h4>Nous allons voir trois types de recherches, basées sur des fonctions PHP :
        </h4>

        <ol>
            <li>array_key_exists pour vérifier si une clé existe dans le tableau.</li>

            <li>in_array pour vérifier si une valeur existe dans le tableau.</li>

            <li>array_search pour récupérer la clé d'une valeur dans le tableau.</li>
        </ol>

        <h4>Vérifier si une clé existe dans un tableau avec array_key_exists</h4>

        <p>Renverra un boolean true ou false</p>
        <?php

        $recipes = [
            'title' => 'Sandwich Parisien',
            'recipe' => 'Etape 1 : Découper une demie baguette',
            'author' => 'gustavelaDalle@fakemail.com'
        ];

        if (array_key_exists('title', $recipes)) {
            echo 'La clé title se trouve dans la recette !';
        } else {
            echo 'La clé title ne se trouve pas dans la recette !';
        }
        if (array_key_exists('commentaires', $recipes)) {
            echo 'La clé commentaires se trouve dans la recette !';
        } else {
            echo 'La clé commentaires ne se trouve dans la recette !';
        }

        ?>

        <h4>Vérifier si une valeur existe dans un tableau avec in_array</h4>
        <p>Le principe est le même que array_key_exists mais cette fois on recherche dans les valeurs. </p>

        <?php

        $users = [

            'Johny Doeson',
            'Johna Daeson',
            'Philippe Durand',
        ];


        if (in_array('Philippe Durand', $users)) {

            echo 'Philippe Durand est bien dans la liste des utilisateurs';
        } else {
            echo 'Philippe Durand n\'est pas dans la liste des utilisateurs';
        }


        ?>

        <h4>Récupérer la clé d'une valeur dans un tableau avec array_search</h4>

        <p>array_search fonctionne comme in_array : il travaille sur les valeurs d'un tableau.</p>

        <?php
        $users = [

            'Johny Doeson',
            'Johna Daeson',
            'Philippe Durand',
        ];


        $positionJohnyDoeson = array_search('Johny Doeson', $users);


        if ($positionJohnyDoeson !== false) {
            echo '"Johny Doeson" se trouve en position ' . $positionJohnyDoeson . PHP_EOL;
        } else {
            echo '"Johny Doeson" ne se trouve pas dans la liste ' . $positionJohnyDoeson . PHP_EOL;
        }


        ?>


    </main>
</body>

</html>
