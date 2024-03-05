<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affichez une liste de recettes à l'aide des boucles</title>
</head>

<body>

    <h1>Affichez une liste de recettes à l'aide des boucles</h1>

    <h2>Les tableaux :</h2>

    <?php
    // Définition des utilisateurs sous forme de tableaux associatifs
    $userOne = ["John Doe", "fake@gmail.com", "MDP", 34];
    $userTwo = ["Johna Doeson", "fakee@gmail.com", "MDPass", 30];
    $userThree = ["Johny Doeson", "fake@gmail.com", "MDP", 38];

    // Création d'un tableau contenant les utilisateurs
    $users = [$userOne, $userTwo, $userThree];

    // Accéder aux éléments individuels d'un utilisateur
    echo "Nom: " . $userOne[0] . ", Email: " . $userOne[1] . ", Age: " . $userOne[3];
    ?>

    <h2>Les boucles</h2>
    <h3>La boucle while</h3>

    <div class="blocText">
        <p>C'est une structure qui fonctionne sur le même principe qu'une condition if… else .</p>
        <p>D'ailleurs, vous allez voir qu'il y a beaucoup de similitudes avec le chapitre sur les conditions.</p>
        <p>Concrètement, une boucle permet de répéter des instructions plusieurs fois. En clair : c'est un gain de temps, c'est très pratique, et bien souvent indispensable.</p>
    </div>

    <?php
    // Boucle while pour afficher un message plusieurs fois
    $i = 0;
    while ($i <= 12) {
        echo "Bonjour Monsieur numéro {$i} <br>";
        $i++;
    }
    ?>

    <h4>Affichage des utilisateurs via une boucle while :</h4>
    <?php
    // Boucle while pour afficher les utilisateurs
    $counter = 0;
    while ($counter < count($users)) {
        echo $users[$counter][0] . ' ' . $users[$counter][1] . '<br />';
        $counter++;
    }
    ?>

    <h3>La boucle for :</h3>

    <div class="blocText">
        <p>for est un autre type de boucle qui a une forme un peu plus condensée et plus commode à écrire. Elle est donc fréquemment utilisée.</p>
    </div>

    <?php
    // Boucle for pour afficher les utilisateurs
    for ($lines = 0; $lines < count($users); $lines++) {
        echo $users[$lines][0] . ' ' . $users[$lines][1] . '<br/>';
    }
    ?>

<h3>Observations :</h3>
    <div class="blocText">
        <p>while est plus simple et plus flexible : on peut faire tous les types de boucles avec, mais on peut oublier de faire certaines étapes, comme l'incrémentation de la variable.</p>

        <p>for est bien adapté quand on doit compter le nombre de fois que l'on répète les instructions, et il permet de ne pas oublier de faire l'incrémentation pour augmenter la valeur de la variable !</p>
    </div>

</body>

</html>