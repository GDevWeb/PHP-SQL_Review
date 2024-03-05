<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <title>Ceci est une page HTML de test</title>
</head>

<body>
    <h2>Page de test</h2>
    <p>
        Cette page contient <strong>uniquement</strong> du code HTML.<br />
        Voici quelques petits tests :
    </p>

    <!-- Liste non ordonnée -->
    <ul>
        <li style="color: blue;">Texte en bleu</li>
        <li style="color: red;">Texte en rouge</li>
        <li style="color: green;">Texte en vert</li>
    </ul>

    <!-- Paragraphe pur HTML -->
    <p>Cette ligne est en pur HTML</p>

    <!-- Code PHP pour afficher du texte -->
    <?php echo "Tandis que celle-ci est en <strong>PHP</strong> <br>"; ?>

    <!-- Affichage de la date en PHP -->
    <p>Aujourd'hui nous sommes le <?php echo date('d/m/Y h:i:s'); ?></p>

    <!-- Affichage de variables et commentaires -->
    <?php
    echo "J'habite à Lille <br>"; // MA ville 
    echo "J'ai 38 ans <br>"; // commentaire monoligne 
    /* Commentaires multilignes */

    echo "commentaire multilignes";
    ?>

    <!-- Utilisation de variables en PHP -->
    <?php
    $userFName = "Gaéte";
    $userLName = "Dam";
    $userAge = 39;

    echo "Salut je suis {$userFName} {$userLName}, j'ai $userAge ans <br>";
    ?>

    <!-- Calculs avec des variables -->
    <?php
    $addition =  5 + 6;
    $multiplication =  5 * 6;
    $total = $addition + $multiplication;

    echo "$total <br>";
    ?>

    <!-- Conditions en PHP -->
    <?php
    $isEnabled = true;
    $isOwner = false;
    $isAdmin = true;

    if (($isEnabled === true && $isOwner === true) || $isAdmin === true) {
        echo "Vous êtes autorisé(e) à accéder au site ✅ <br>";
    } else if ($isEnabled === false || $isOwner === false) {
        echo "Accès refusé ❌ car vous n'avez pas les droits suffisants<br>";
    } else {
        echo "Euh, je ne comprends pas ton choix !";
    }
    ?>

    <!-- Utilisation de la syntaxe alternative -->
    <?php $chickenRecipesEnabled = true; ?>

    <?php if ($chickenRecipesEnabled) : ?>
        <h1>Liste des recettes à base de poulet</h1>
    <?php endif; ?>

    <!-- Switch en PHP -->
    <?php
    $grade = 10;

    switch ($grade) {
        case 0:
            echo "Il faudra revoir tout le cours !";
            break;

        case 5:
            echo "Tu dois réviser plusieurs modules";
            break;

        case 7:
            echo "Il te manque quelques révisions pour atteindre la moyenne ";
            break;

        case 10:
            echo "Tu as pile poil la moyenne, c'est un peu juste…";
            break;

        case 12:
            echo "Tu es assez bon";
            break;

        case 16:
            echo "Tu te débrouilles très bien !";
            break;

        case 20:
            echo "Excellent travail, c'est parfait !";
            break;

        default:
            echo "Désolé, je n'ai pas de message à afficher pour cette note";
    }
    ?>

    <!-- Conditions ternaires en PHP -->
    <?php
    $userAge = 24;

    if ($userAge < 18) {
        echo "Vous n'avez pas l'âge de conduire en France";
    } else {
        echo "Vous avez l'âge de conduire en France";
    }

    // Ternaire :
    $isAdult = ($userAge >= 18) ? true : false;

    // Ou mieux :
    $isAdult = ($userAge >= 18);
    ?>

<!-- Affichez une liste de recettes à l'aide des boucles -->


</body>

</html>
