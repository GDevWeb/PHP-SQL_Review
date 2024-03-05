<?php

$title = "Les tableaux"


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

        <h1><?php echo $title  ?></h1>


        <div class="blocText">
            <p>Nous allons détailler ici l'une des fonctionnalités introduites dans le chapitre précédent : les tableaux (ou « arrays », en anglais).</p>

            <p>Il s'agit en fait de variables « composées », que l'on peut imaginer sous la forme de tableaux.</p>
        </div>

        <div class="blocText">

            <h2>Les 2 type de tableaux en PHP</h2>

            <h3>Les tableaux numérotés</h3>

            <p>clé et valeur</p>

            <h4>Construisez un tableau numéroté</h4>
            <p>Pour créer un tableau numéroté en PHP, on liste ses valeurs entre crochets[] .</p>

            <p>Cet exemple vous montre comment créer l'array $recipes :</p>
            <?php

            $recipes = ['Cassoulet', 'Couscous', 'Escalope Milanaise', 'Salade César',];

            // La fonction array permet aussi de créer un array
            $recipes = array('Cassoulet', 'Couscous', 'Escalope Milanaise');
            ?>

            <h4>L'ordre a beaucoup d'importance :</h4>

            <p>Le premier élément (« Cassoulet») aura le n° 0.</p>

            <?php
            $recipes[0] = 'Cassoulet';
            $recipes[1] = 'Couscous';
            $recipes[2] = 'Escalope Milanaise';
            ?>

            <?php
            echo $recipes[1]; // Cela affichera : Couscous
            ?>

            <p>Ensuite Couscous le n° 1.</p>

            <p>Si vous ne voulez pas avoir à écrire vous-même le numéro de la case que vous créez, vous pouvez laisser PHP le sélectionner automatiquement en laissant les crochets vides :</p>

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
        $recipe = [
            "title" => "Cassoulet",
            "recipe"=> "Étape 1 : Flageolets, ...",
            "author"=> "johnDoe@fakemail.com",
            "enabled"=> true,
        ];
        
        ?>

        <h4>Afficher le titre :</h4>
        <?php echo $recipe["title"]?>

<h4>Observations :</h4>
<ul>

    <li>Les tableaux numérotés permettent de stocker une série d'éléments du même type, comme des prénoms. Chaque élément du tableau contiendra alors un prénom.</li>
    
    <li>Les tableaux associatifs permettent de découper une donnée en plusieurs sous-éléments. Par exemple, une adresse peut être découpée en nom, prénom, nom de rue, ville…    </li>
</ul>

<h2>Parcourez un tableau</h2>



</main>
</body>

</html>