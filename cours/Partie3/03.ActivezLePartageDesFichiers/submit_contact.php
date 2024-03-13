<?php

//1. Test si fichier bien envoyé et pas d'erreur
if (isset($_FILES['screenshot']) && $_FILES['screenshot']['error'] == 0) {
    //2. Test, si le fichier est trop volumineux
    if ($_FILES['screenshot']['size'] > 1000000) {
        echo "L'envoi n'a pas pu être effectué, erreur ou image trop volumineuse";
        return;
    }

    //3. TEst si l'extension du fichier n'est pas autorisé :
    $fileInfo = pathinfo($_FILES["screenshot"]["name"]);
    $extension = $fileInfo["extension"];
    $allowedExtensions = ['jpg', 'jpeg', 'gif', 'png', 'pdf'];
    if (!in_array($extension, $allowedExtensions)) {
        echo "L'envoi n'a pas pu être effectué, l'extension {$extension} n'est pas autorisée";
        return;
    }

    //4. Test si le sous-dossier uploads existe :
    $path = __DIR__ . '/uploads';
    if (!is_dir($path)) {
        echo "L'envoi n'a pas pu être effectué, le dossier uploads est manquant";
        return;
    }

    // 5.Validation de l'uploads du fichier :
    move_uploaded_file($_FILES["screenshot"]["tmp_name"], $path . '/' . basename($_FILES['screenshot']['name']));

    echo 'Fichier bien envoyé';
}

?>
