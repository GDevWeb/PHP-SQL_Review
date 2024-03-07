<?php
// Définition du titre de la page
$title = "5.Exploitez toute la puissance des fonctions PHP";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?></title>
</head>

<body>

    <h1>Les fonctions en PHP</h1>

    <h2>Qu'est-ce qu'une fonction ?</h2>

    <p>
        Une fonction est une série d'instructions qui effectue des actions et qui retourne éventuellement une valeur.</p>

    <p>En général, dès que vous avez besoin d'effectuer des opérations un peu longues dont vous aurez à nouveau besoin plus tard, il est conseillé de vérifier s'il n'existe pas déjà une fonction qui fait cela pour vous. Et si la fonction n'existe pas, vous avez la possibilité de la créer.
    </p>

    <h3>Comprenez le principe d'une fonction</h3>

    <!-- Exemple de fonction -->
    <?php
    // Function definition
    function exampleFunction($arg1, $arg2)
    {
        // Instructions de la fonction
    }
    ?>

    <h3>Appelez une fonction</h3>
    <!-- Appel de la fonction exampleFunction -->
    <?php
    // Définition de valeurs pour les arguments de la fonction
    $arg1 = "valeur_arg1";
    $arg2 = "valeur_arg2";
    // Appel de la fonction exampleFunction avec les valeurs des arguments
    exampleFunction($arg1, $arg2);
    ?>

    <h3>Récupérez la valeur de retour de la fonction</h3>

    <h4>Il y a en effet deux types de fonctions :</h4>

    <ol>
        <li>Celles qui ne retournent aucune valeur (ça ne les empêche pas d'effectuer des actions).</li>
        <li>Celles qui retournent une valeur.</li>
    </ol>

    <p>Si la fonction ne retourne aucune valeur, il n'y a rien de plus à faire que dans les codes précédents. La fonction est appelée, elle fait son travail. On ne lui demande rien de plus.</p>

    <p>En revanche, si la fonction retourne une valeur, on la récupère dans une variable, comme ceci :</p>

    <!-- Exemple de fonction avec valeur de retour -->
    <?php
    $isAllowed = allowRecipe([
        'title' => 'Sandwich au thon',
        'recipe' => '',
        'author' => 'gdevweb@fakemail.com',
        'is_enabled' => true,
    ]);

    if ($isAllowed) {
        echo 'La recette doit être activée !';
    } else {
        echo 'La recette doit être cachée !';
    }

    // Définition de la fonction allowRecipe
    function allowRecipe($recipe)
    {
        // Vérifie si la recette est activée
        if ($recipe['is_enabled']) {
            // Si oui, retourne vrai
            return true;
        } else {
            // Sinon, retourne faux
            return false;
        }
    }
    ?>

    <h4>Bon à savoir</h4>
    <p>Bon à savoir : comme on l'a vu, il est possible d'envoyer en entrée plusieurs paramètres à une fonction ; en revanche, cette dernière ne peut retourner qu'une seule valeur.</p>

    <p>Il existe un moyen de contourner cette limitation en combinant des variables au sein d'un tableau de variables (appelé array) dont nous avons parlé dans le chapitre précédent.</p>

    <h3>Utilisez les fonctions prêtes à l'emploi de PHP</h3>

    <p>PHP propose des centaines de fonctions prêtes à l'emploi. Sur le site officiel, la documentation PHP les répertorie toutes, classées par catégorie.</p>

    <p>Ces fonctions sont très pratiques. En fait, c'est en partie là que réside la force de PHP : ses fonctions sont vraiment excellentes car elles couvrent la quasi-totalité de nos besoins. En fait, pratiquement à chaque fois que je m'apprêtais à écrire une fonction, j'ai pu remarquer que celle-ci existait déjà.</p>

    <p>Voici un petit aperçu de ce que peuvent vous permettre de faire des fonctions PHP :</p>

    <ul>
        <li>str_replace pour rechercher et remplacer des mots dans une variable ;</li>
        <li>move_uploaded_file pour envoyer un fichier sur un serveur ;</li>
        <li>imagecreate pour créer des images miniatures (aussi appelées "thumbnails") ;</li>
        <li>mail pour envoyer un mail avec PHP (très pratique pour faire une newsletter) ;</li>
        <li>de nombreuses options pour modifier des images, y écrire du texte, tracer des lignes, des rectangles, etc. ;</li>
        <li>crypt pour chiffrer des mots de passe ;</li>
        <li>date pour renvoyer l'heure, la date, etc.</li>
    </ul>

    <p>Dans la plupart des cas, il faudra indiquer des paramètres à la fonction, pour qu'elle sache sur quoi travailler.</p>

    <p>Nous allons ici découvrir rapidement quelques fonctions pour vous habituer à les utiliser.</p>

    <p>Nous allons voir :</p>

    <ul>
        <li>trois fonctions qui effectuent des modifications sur des chaînes de caractères ;</li>
        <li>et une qui permet de récupérer la date.</li>
    </ul>

    <h3>Manipulez du texte avec les fonctions</h3>

    <p>De nombreuses fonctions permettent de manipuler le texte. En voici trois qui peuvent être utiles :</p>

    <ol>
        <li>strlen pour calculer la longueur d'une chaîne de caractères ;</li>
        <li>str_replace pour rechercher et remplacer une chaîne de caractères ;</li>
        <li>sprintf pour formater une chaîne de caractères.</li>
    </ol>

    <h4>Calculer la longueur d'une chaîne de caractères</h4>

    <h5>Via strlen</h5>
    <?php
    $stringTest = "Salut les gens, je me remets à PHP et oui je lui laisse une nouvelle chance";
    $length = strlen($stringTest);

    echo 'La longueur de la phrase test est de :' . $length . ' caractères';
    ?>

    <h5>Via count</h5>

    <h3>Recherchez et remplacez une chaîne de caractères avec str_replace</h3>
    <p>str_replace remplace une chaîne de caractères par une autre.</p>

    <?php
    echo str_replace('choucroute', 'Chorizo', 'La choucroute c\'est piquant!');
    ?>

    <p>
        On a besoin d'indiquer trois paramètres :
    </p>
    <ol>
        <li>La chaîne qu'on recherche – ici, « choucroute » (on aurait pu rechercher une lettre aussi).</li>
        <li>La chaîne qu'on veut mettre à la place – ici, on met des « Chorizo » à la place des « choucroute ».</li>
        <li>La chaîne dans laquelle on doit faire la recherche.</li>
    </ol>

    <h3>Formatez une chaîne de caractères avec sprintf</h3>

    <p>La fonction sprintf permet de formater une chaîne de caractères.</p>
    <p>Elle est très pratique lorsque nous avons besoin de passer plusieurs variables et elle peut remplacer la concaténation pour des raisons de lisibilité du code.</p>

    <?php
    $recipe = [
        'title' => 'Salade Romaine',
        'recipe' => 'Etape 1 : Lavez la salade ; Etape 2 : euh ...',
        'author' => 'laurene.castor@exemple.com',
    ];

    echo sprintf(
        '%s par "%s" : %s',
        $recipe['title'],
        $recipe['author'],
        $recipe['recipe']
    );
    ?>

    <h3>Récupérez la date</h3>

    <p>Nous allons découvrir la fonction qui renvoie l'heure et la date. Il s'agit de date (un nom facile à retenir, avouez !).</p>

    <p>Cette fonction peut donner beaucoup d'informations. Voici les principaux paramètres à connaître :</p>

    <table>
        <tr>
            <th>Paramètre</th>
            <th>Description</th>
        </tr>
        <tr>
            <td>H</td>
            <td>Heure</td>
        </tr>
        <tr>
            <td>i</td>
            <td>Minute</td>
        </tr>
        <tr>
            <td>d</td>
            <td>Jour</td>
        </tr>
        <tr>
            <td>m</td>
            <td>Mois</td>
        </tr>
        <tr>
            <td>Y</td>
            <td>Année</td>
        </tr>
    </table>

    <h4>Exemple:</h4>
    <?php
    // Enregistrons les informations de date dans des variables

    $day = date('d');
    $month = date('m');
    $year = date('Y');

    $hour = date('H');
    $minute = date('i');

    // Maintenant on peut afficher ce qu'on a recueilli
    echo 'Bonjour ! Nous sommes le ' . $day . '/' . $month . '/' . $year . ' et il est ' . $hour . ' h ' . $minute;
    ?>

    <h5>Version simplifiée :</h5>

    <?php
    $date = date('d/m/Y');
    $time = date('H\h i');

    echo "bonjour ! Nous sommes le {$date} et il est {$time}";
    ?>

    <h2>Créez vos propres fonctions</h2>

    <p>
        Bien que PHP propose des centaines de fonctions (j'insiste, mais il faut dire qu'il y en a tellement !), parfois il n'y aura pas ce que vous cherchez, et il faudra écrire vous-même la fonction. C'est une façon pratique d'étendre les possibilités offertes par PHP.
    </p>

    <h3>Quand écrire une fonction ?</h3>

    <p>En général, si vous effectuez des opérations un peu complexes que vous pensez avoir besoin de refaire régulièrement, il est conseillé de créer une fonction.</p>

    <p>Nous allons découvrir la création de fonctions à travers trois exemples :</p>

    <ol>
        <li>Vérifier si la recette est valide.</li>
        <li>Récupérer des recettes à afficher.</li>
        <li>Récupérer le nom d'un utilisateur en fonction de l'e-mail associé à la création d'une recette</li>
    </ol>

    <h4>Exemple 1 : vérifiez la validité d'une recette</h4>

    <p>Un premier exemple simple, c'est d'établir une fonction qui retourne :</p>

    <ul>
        <li>true si la recette est valide ;</li>
        <li>faux si la recette ne l'est pas.</li>
    </ul>

    <?php

    $recipe = [
        'title' => 'Salade Romaine',
        'recipe' => 'Etape 1 : Lavez la salade ; Etape 2 : euh ...',
        'author' => 'laurene.castor@exemple.com',
        'is_enabled' => true,
    ];

    //au minimum :
    if ($recipe['is_enabled']) {
        return true;
    } else {
        return false;
    }

    //mieux :
    // $isEnabled = $recipe['is_enabled'];

    //encore mieux :
    if (array_key_exists('is_enabled', $recipe)) {
        $isEnabled = $recipe['is_enabled'];
    } else {
        $isEnabled = false;
    }

    ?>

    <p><i>On va quand même pas réécrire ça à chaque fois qu'on a besoin de vérifier si une recette est valide, si ? </i></p>

    <?php

    function isValidRecipe(array $recipe)
    {
        if (array_key_exists("is_enabled", $recipe)) {
            $isEnabled = $recipe['is_enabled'];
        } else {
            $isEnabled = false;
        }

        return $isEnabled;
    }


    ?>

    <h4>Pour créer une fonction,</h4>

    <ol>

        <li>Vous devez taper function (en français, ça veut dire « fonction »).</li>

        <li>Ensuite, donnez-lui un nom. Par exemple, celle-ci s'appelle isValidRecipe .</li>

    </ol>

    <p>Ce qui est plus particulier après, c'est ce qu'on met entre parenthèses : il y a une variable. C'est le paramètre dont a besoin la fonction pour travailler, ici il s'agit de notre tableau.</p>

    <p>Nous pouvons – et c'est une bonne pratique – définir le type de la variable attendue : ici, nous souhaitons un tableau donc nous préfixons la variable $recipe par le mot-clé array .</p>

    <p><i>Notre fonction doit forcément être appelée avec un paramètre (une recette), sans quoi elle va générer une erreur.</i></p>

    <p>Vous avez peut-être remarqué que cette ligne est la seule à ne pas se terminer par un point-virgule. C'est normal, il ne s'agit pas d'une instruction mais juste d'une « carte d'identité » de la fonction (son nom, ses paramètres…).</p>

    <p>Notre fonction peut aussi – et c'est une deuxième bonne pratique – donner un type de retour, c'est-à-dire le type de valeur que la fonction doit retourner.</p>

    <p>Ici, nous récupérons soit true , soit false donc le type est bool.</p>

    <p>Ensuite, vous repérez des accolades. Elles permettent de marquer les limites de la fonction. Cette dernière commence dès qu'il y a une { et se termine lorsqu'il y a une } . Entre les deux, il y a son contenu.</p>

    <p>Voilà, la fonction est créée, vous n'avez plus besoin d'y toucher. Après, pour faire appel à elle, il suffit d'indiquer son nom, et de préciser ses paramètres entre parenthèses.</p>

    <p>Il ne faut pas oublier le fameux point-virgule ( ; ), car il s'agit d'une instruction.</p>


    <?php

    // 2 exemples
    $romanSalad = [
        'title' => 'Salade Romaine',
        'recipe' => 'Etape 1 : Lavez la salade ; Etape 2 : euh ...',
        'author' => 'laurene.castor@exemple.com',
        'is_enabled' => true,
    ];

    $sushis = [
        'title' => 'Sushis',
        'recipe' => 'Etape 1 : du saumon ; Etape 2 : du riz',
        'author' => 'laurene.castor@exemple.com',
        'is_enabled' => false,
    ];


    // Répond true !
    $isRomandSaladValid = isValidRecipe($romanSalad);

    // Répond false !
    $isSushisValid = isValidRecipe($sushis);
    ?>

    <h3>Exemple 2 : récupérez les recettes "valides"</h3>

    <p>Rappelez-vous, nous avions convenu que nous devions afficher la liste des recettes valides.</p>

<p>Nous venons de créer la fonction qui permet de vérifier qu'une recette est valide, il nous manque maintenant à boucler sur la liste des recettes : voilà une première occasion de réutiliser la fonction créée précédemment !</p>

<?php

// AVANT

foreach ($recipes as $recipe) {
    if ($recipe['is_enabled']) {
        // echo $recipe['title'] ..
    }
}

// APRES

function getRecipes(array $recipes) : array
{
    $validRecipes = [];

    foreach($recipes as $recipe) {
        if (isValidRecipe($recipe)) {
            $validRecipes[] = $recipe;
        }
    }

    return $validRecipes;
}

// construire l'affichage HTML des recettes
foreach(getRecipes($recipes) as $recipe) {
    // echo $recipe['title'] .. 
}
?>

<p>Ici, la fonction contient le code nécessaire à la récupération des recettes valides.</p>

<p>Comme précédemment, on boucle et on ne conserve que les recettes valides identifiées grâce à la fonction  isValidRecipe  .</p>

<p>Il n'est pas nécessaire d'assigner le résultat d'une fonction à une variable ! Nous voyons ici que nous passons directement la fonction getRecipes dans la boucle (nous savons que c'est un tableau parce que nous avons défini le type de retour).</p>

<h3>Exemple 3 : affichez le nom de l'auteur</h3>

<p>Allez, on passe à la vitesse supérieure. Nous allons créer une fonction pour améliorer l'affichage, ce qui nous donne à nouveau l'occasion de manipuler des tableaux.</p>

<p>Cette fois, la problématique est de relier l'e-mail associé à un compte utilisateur à l'e-mail utilisé pour la contribution d'une recette.</p>

<p>Si on découpe le problème en étapes, vous avez déjà toutes les connaissances nécessaires :</p>

<ol>
    <li>Prendre l'e-mail.</li>
    <li>Boucler sur les utilisateurs de la plateforme.</li>
    <li>Si les e-mails correspondent, prendre le nom et l'âge.</li>
    <li>Sinon, continuer à parcourir la liste des utilisateurs.</li>
</ol>

<p>Une solution tout à fait valide serait donc celle-ci (avec une boucle dans une boucle) :</p>
<?php
function displayAuthor(string $authorEmail, array $users): string
{
    foreach ($users as $user) {
        if ($authorEmail === $user['email']) {
            return $user['full_name'] . '(' . $user['age'] . ' ans)';
        }
    }
}
?>

<h3>En résumé</h3>

<ul>
    <li>Les fonctions sont des blocs de code qui exécutent des instructions selon certains paramètres.</li>
    <li>Les fonctions ont généralement une entrée et une sortie, et peuvent avoir un type (string, int, bool, array...).</li>
    <li>PHP propose des centaines de fonctions prêtes à l'emploi pour tout type de tâches : envoyer un e-mail, récupérer l'heure, chiffrer des mots de passe, etc.</li>
    <li>Si PHP ne propose pas la fonction dont on a besoin, il est possible de la créer avec le mot-clé function : on définira alors le type des paramètres et du retour de la fonction.</li>
</ul>
</body>

</html>
