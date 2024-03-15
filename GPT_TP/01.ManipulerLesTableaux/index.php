<?php

$title = "01.Chat gpt - Manipuler les tableaux";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?></title>
</head>

<body>

    <!-- Titre de la page -->
    <h1><?php echo $title ?></h1>

    <!-- Exercice sur les tableaux numérotés -->
    <h2>Exercice sur les tableaux numérotés :</h2>
    <p>Vous avez une liste de noms d'étudiants. Créez un tableau numéroté contenant ces noms. Ensuite, parcourez le tableau et affichez chaque nom sur une nouvelle ligne.</p>
    <?php
    $studentList = ["Albert", "Bernard", "Cédric", "Dominique", "Elvis"];
    ?>
    <h3>Affichage de la liste des étudiants :</h3>
    <ul>
        <?php
        foreach ($studentList as $student) {
            echo "<li>$student</li>";
        }
        ?>
    </ul>

    <!-- Exercice sur les tableaux associatifs -->
    <h2>Exercice sur les tableaux associatifs :</h2>
    <p>Vous travaillez sur un projet de gestion d'utilisateurs. Créez un tableau associatif pour représenter un utilisateur avec des clés telles que "nom", "email", "âge", etc. Affichez ensuite les détails de l'utilisateur à l'aide de ces clés.</p>
    <?php
    $usersList = [
        [
            "nom" => "Albert",
            "email" => "albert@fakemail.com",
            "âge" => 38,
        ],
        [
            "nom" => "Bernard",
            "email" => "bernard@fakemail.com",
            "âge" => 35,
        ],
        [
            "nom" => "Cédric",
            "email" => "cedric@fakemail.com",
            "âge" => 33,
        ],
        [
            "nom" => "Dominique",
            "email" => "cedric@fakemail.com",
            "âge" => 31,
        ],
        [
            "nom" => "Elvis",
            "email" => "elvis@fakemail.com",
            "âge" => 29,
        ],
    ];
    ?>
    <h4>Affichage détaillé de chaque utilisateur:</h4>
    <?php
    foreach ($usersList as $user) {
        echo "<ul>";
        foreach ($user as $property => $propertyValue) {
            echo "<li><strong>$property</strong> : $propertyValue</li>";
        }
        echo "</ul>";
    }
    ?>

    <!-- Exercice sur le parcours d'un tableau -->
    <h2>Exercice sur le parcours d'un tableau :</h2>
    <p>Vous avez un tableau de fruits. Parcourez le tableau et affichez chaque fruit avec un numéro de série (commençant à 1) suivi de son nom.</p>
    <?php
    $fruits = [
        ["serialNumber" => 10, "fruitName" => "ananas"],
        ["serialNumber" => 11, "fruitName" => "banane"],
        ["serialNumber" => 12, "fruitName" => "citron"],
        ["serialNumber" => 13, "fruitName" => "grenade"],
    ];
    ?>
    <h4>Affichage de chaque fruit avec son numéro de série:</h4>
    <ul>
        <?php
        foreach ($fruits as $fruit) {
            echo "<li>{$fruit['serialNumber']}: {$fruit['fruitName']}</li>";
        }
        ?>
    </ul>

    <!-- Exercice sur l'ajout et la suppression d'éléments dans un tableau -->
    <h2>Exercice sur l'ajout et la suppression d'éléments dans un tableau :</h2>
    <p>Vous avez un tableau de nombres. Ajoutez un nouveau nombre à la fin du tableau. Ensuite, supprimez le premier nombre du tableau. Affichez le tableau résultant à chaque étape.</p>
    <?php
    $numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9];
    ?>
    <h4>Affichage du tableau avant les opérations :</h4>
    <pre><?php print_r($numbers); ?></pre>
    <?php
    $addNumber = 10;
    $numbers[] = $addNumber;
    //ou
    //array_push($addNumber)
    ?>
    <h4>Ajout du nombre à la fin du tableau :</h4>
    <pre><?php print_r($numbers); ?></pre>
    <?php
    array_shift($numbers);
    //ou
    //unset($numbers[0]);
    ?>
    <h4>Suppression du premier nombre du tableau :</h4>
    <pre><?php print_r($numbers); ?></pre>

    <h3>Exercice sur les méthodes abordées récemment :</h3>

    <p>Vous avez un tableau de noms de personnes. Utilisez la fonction array_key_exists pour vérifier si une clé donnée existe dans le tableau. Ensuite, utilisez la fonction in_array pour vérifier si un nom spécifique existe dans le tableau. Enfin, utilisez la fonction array_search pour trouver la clé d'un nom spécifique dans le tableau.</p>

    <?php
    $personsList = [
        [
            "nom" => "Albert",
            "email" => "albert@fakemail.com",
            "âge" => 38,
        ],
        [
            "nom" => "Bernard",
            "email" => "bernard@fakemail.com",
            "âge" => 35,
        ],
        [
            "nom" => "Cédric",
            "email" => "cedric@fakemail.com",
            "âge" => 33,
        ],
        [
            "nom" => "Dominique",
            "email" => "cedric@fakemail.com",
            "âge" => 31,
        ],
        [
            "nom" => "Elvis",
            "email" => "elvis@fakemail.com",
            "âge" => 29,
        ],
    ];

    ?>

    <h4>Affichage de la liste des personnes avant opération :</h4>
    <pre><?php print_r($personsList); ?></pre>

    <h4>array_key_exists</h4>

    <?php

    if (array_key_exists('email', $personsList[0])) {
        echo 'La clé "email" existe dans la liste des personnes';
    } else {
        echo 'La clé "email" n\'existe pas dans la liste des personnes';
    }

    ?>

<h4>in_array</h4>
<?php 
$names = array_column($personsList, 'nom');
if(in_array('Dominique', $names)){
    echo 'Dominique est bien dans la liste des personnes';
}else{
    echo 'Dominique n\'est pas dans la liste des personnes';
}
?>

    <h4>array_search</h4>
    <?php
    $index = array_search('Dominique', array_column($personsList, 'nom'));
    if ($index !== false) {
        echo 'Dominique se trouve à l\'index ' . $index . ' dans la liste des personnes';
    } else {
        echo 'Dominique n\'est pas dans la liste des personnes';
    }
    ?>




</body>

</html>