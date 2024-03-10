<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
     // Vérifier si les paramètres nom et prénom sont présents dans l'URL
    if (isset($_GET['nom']) && isset($_GET['prenom'])) {
        // Récupérer les valeurs des paramètres nom et prénom
        $nom = $_GET['nom'];
        $prenom = $_GET['prenom'];
        echo 'Bonjour ' . $nom . ' ' . $prenom . '';
    ?>

    <?php
    } else {
        // Afficher un message d'erreur si les paramètres ne sont pas présents
        echo "<p>Erreur : Veuillez fournir votre nom et prénom dans l'URL.</p>";
    }
    ?>



</body>

</html>