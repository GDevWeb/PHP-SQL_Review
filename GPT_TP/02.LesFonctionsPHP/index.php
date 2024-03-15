<?php

$title = "GPT - Les fonctions"

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?></title>
</head>

<body>

    <h1><?php echo $title ?></h1>

    <h2>**Calcul de la longueur d'une chaîne de caractères :**</h2>
    <p>Écrivez une fonction nommée `calculateStringLength` qui prend en paramètre une chaîne de caractères et renvoie sa longueur.</p>

    <?php

    function calculateStringLength(string $string)
    {

        $length = strlen($string);


        return $length;
    }

    $testString = "Hello world";
    $getLength = calculateStringLength($testString);

    echo $testString . '' . ' a une longueur de : ' . '' . $getLength . 'caractères';
    ?>

    <h2>**Recherche et remplacement dans une chaîne de caractères :**</h2>

    <p>Écrivez une fonction nommée `replaceString` qui prend en paramètre trois chaînes de caractères : la chaîne à rechercher, la chaîne de remplacement et la chaîne dans laquelle effectuer la recherche et le remplacement. La fonction doit retourner la chaîne modifiée.</p>

    <?php

    function replaceString(string $research, string $replace, string $string)
    {
        $alteredString = str_replace($research, $replace, $string);

        return $alteredString;
    }


    $testStringTwo = "Good bye people";
    $newString = replaceString('bye', 'morning', $testStringTwo);
    echo '<strong>Phrase d\'origine :</strong> ' . $testStringTwo . '<br>' . '<strong> Phrase modifiée : </strong> ' . '' . $newString . '';
    ?>

    <h3>3. **Formatage d'une chaîne de caractères :**</h3>
    <p> Écrivez une fonction nommée `formatString` qui prend en paramètre plusieurs variables et utilise la fonction `sprintf` pour les formater dans une chaîne de caractères selon un modèle spécifique. Par exemple, la fonction pourrait formater une date avec le jour, le mois et l'année dans un format spécifique.
    </p>

    <?php

    function formatString($day, $month, $year)
    {

        // utilisation de la méthode sprintF pour formater une date au format : jour mois et année

        $formatted_date = sprintf('%02d/%02d/%02d', $day, $month, $year);

        return $formatted_date;
    }

    $date = formatString(8, 3, 2024); //appel à la fonction avec les args
    echo "Date formatée : " . $date; //affichage de $date;

    ?>

    <h3>4. **Vérification de la validité d'une recette :**
    </h3>

    <p> Prenez le tableau studentList. Écrivez une fonction nommée `isValidAccount` qui prend en paramètre un tableau représentant un étudiant et renvoie `true` si le compte de l'étudiant est valide (c'est-à-dire si le compte est actif) et `false` sinon.
    </p>

    <?php

    $studentList = [

        [
            'fName' => "Albert",
            'lName' => "Bertrand",
            'age' => 18,
            'isValidAccount' => true,
        ],
        [
            'fName' => "Alice",
            'lName' => "Bertrande",
            'age' => 19,
            'isValidAccount' => false,
        ],
        [
            'fName' => "Bénabar",
            'lName' => "Citrole",
            'age' => 18,
            'isValidAccount' => false,
        ],
        [
            'fName' => "Bérangère",
            'lName' => "Citrus",
            'age' => 18,
            'isValidAccount' => true,
        ],

    ];


    function isValidAccount(array $studentList)
    {

        $validAccounts = [];

        foreach ($studentList as $student) {

            if ($student['isValidAccount']) {
                $validAccounts[] = $student;
            }
        }

        return $validAccounts;
    }

    // Appel à la fonction :
    $validStudents = isValidAccount($studentList);

    // Affichage des étudiants dont les comptes sont valides :

    echo "Étudiants avec des comptes valides : <br>";
    foreach ($validStudents as $student) {
        echo $student['fName'] . ' ' . $student['lName'] . "<br>";
    }
    ?>

    <h3>5. **Récupération de la date actuelle :**
    </h3>

    <p> Écrivez une fonction nommée `getCurrentDate` qui renvoie la date actuelle sous forme de chaîne de caractères dans un format spécifique (par exemple, "YYYY-MM-DD").
    </p>

    <?php

    function getCurrentDate()
    {

        $date = date("Y-m-d");

        return 'Nous sommes le : ' . $date . '<br>';
    }

    echo getCurrentDate();

    ?>

    <h3>6.Calcul du nombre de mots dans une chaîne de caractères : Écrivez une fonction nommée</h3>

    <p>countWords qui prend en paramètre une chaîne de caractères et renvoie le nombre de mots qu'elle contient. Vous pouvez supposer que les mots sont séparés par des espaces.</p>

    <?php
    function countWords(string $sentence)
    {
        // utilisation de la fonction str_word_count pour compter les mots dans la phrase

        return str_word_count($sentence);
    }

    $sentence = "Bonjour, compte mes mots";
    $numWords = countWords($sentence);

    echo 'Nombre de mots dans la phrase : ' . $numWords;
    ?>

    <h3>7.Validation d'une adresse e-mail :</h3>

    <p>Écrivez une fonction nommée validateEmail qui prend en paramètre une adresse e-mail sous forme de chaîne de caractères et vérifie si elle est valide en utilisant une expression régulière.</p>

    <?php

    function isValidEmail($email)
    {
        // Utilisation de filter_var avec FILTER_VALIDATE_EMAIL pour valider l'adresse e-mail
        return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
    }

    // Exemple d'utilisation de la fonction isValidEmail
    $email1 = "user@example.com";
    $email2 = "invalid_email";

    if (isValidEmail($email1)) {
        echo "L'adresse e-mail $email1 est valide.\n";
    } else {
        echo "L'adresse e-mail $email1 est invalide.\n";
    }

    if (isValidEmail($email2)) {
        echo "L'adresse e-mail $email2 est valide.\n";
    } else {
        echo "L'adresse e-mail $email2 est invalide.\n";
    }


    ?>

    <h3>8. **Génération d'un mot de passe aléatoire :**
    </h3>

    <p> Écrivez une fonction nommée `generateRandomPassword` qui génère un mot de passe aléatoire avec une longueur spécifiée. Le mot de passe peut contenir des lettres majuscules et minuscules, des chiffres et des caractères spéciaux.
    </p>


    <?php

    function generateRandomPassword(int $length)
    {

        $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()';

        // Générer un mot de passe aléatoire en mélangeant les caractères
        $password = substr(str_shuffle($chars), 0, $length);

        // Retourner le mot de passe haché
        return password_hash($password, PASSWORD_DEFAULT);
    }

    // Appel de la fonction pour générer un mot de passe aléatoire
    $password = generateRandomPassword(12);
    echo "Mot de passe généré : " . $password;
    ?>


    <h3>9. **Conversion d'une chaîne de caractères en majuscules :**</h3>

    <p> Écrivez une fonction nommée `convertToUpperCase` qui prend en paramètre une chaîne de caractères et la convertit entièrement en majuscules.
    </p>

    <?php

    function convertToUpperCase(string $string)
    {

        return strtoupper($string);
    }

    $lowerStringTest = "hello les gens";
    $convertIntoUpperCase = convertToUpperCase($lowerStringTest);
    echo $convertIntoUpperCase;
    ?>


    <h3>10. **Conversion d'une chaîne de caractères en minuscules :**
    </h3>

    <p> Écrivez une fonction nommée `convertToLowerCase` qui prend en paramètre une chaîne de caractères et la convertit entièrement en minuscules.
    </p>

    <?php

    function convertToLowerCase(string $string)
    {
        return strtolower($string);
    }

    $upperStringTest = "GOOD BYE LES GENS";
    $convertIntoLowerCase = convertToLowerCase($upperStringTest);
    echo $convertIntoLowerCase;


    ?>



</body>

</html>