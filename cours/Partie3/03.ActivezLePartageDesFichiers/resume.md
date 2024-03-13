Voici le contenu au format Markdown :

```markdown
# Utilisation des formulaires pour l'envoi de fichiers en PHP

L'envoi de fichiers via un formulaire peut être une fonctionnalité cruciale pour permettre aux utilisateurs de partager des captures d'écran ou d'autres documents sur votre site. Voici comment le faire en PHP :

## Activation de la soumission de fichiers

1. **Créer un formulaire HTML**: Ajoutez un attribut `enctype="multipart/form-data"` à la balise `<form>` pour autoriser l'envoi de fichiers.
   
   Exemple :
   ```html
   <form action="submit_contact.php" method="POST" enctype="multipart/form-data">
       <!-- Champs de formulaire -->
       <!-- Champ d'envoi de fichier -->
       <input type="file" name="screenshot" />
       <button type="submit">Envoyer</button>
   </form>
   ```

## Traitement de l'envoi en PHP

2. **Validation du fichier envoyé**:
   - Vérifiez si un fichier a été envoyé et s'il n'y a pas d'erreur d'envoi.
   - Limitez la taille du fichier.
   - Vérifiez si l'extension du fichier est autorisée.

3. **Gestion du dossier de stockage**:
   - Assurez-vous que le dossier de destination existe et a les bons droits de lecture/écriture.

4. **Validation finale et stockage du fichier**:
   - Si toutes les conditions sont remplies, acceptez le fichier en utilisant `move_uploaded_file()`.

Exemple de code PHP pour le traitement :
```php
<?php
if (isset($_FILES['screenshot']) && $_FILES['screenshot']['error'] === 0) {
    if ($_FILES['screenshot']['size'] > 1000000) {
        echo "L'envoi n'a pas pu être effectué, erreur ou image trop volumineuse";
        return;
    }
    $fileInfo = pathinfo($_FILES['screenshot']['name']);
    $extension = $fileInfo['extension'];
    $allowedExtensions = ['jpg', 'jpeg', 'gif', 'png'];
    if (!in_array($extension, $allowedExtensions)) {
        echo "L'envoi n'a pas pu être effectué, l'extension {$extension} n'est pas autorisée";
        return;
    }
    $path = __DIR__ . '/uploads/';
    if (!is_dir($path)) {
        echo "L'envoi n'a pas pu être effectué, le dossier uploads est manquant";
        return;
    }
    move_uploaded_file($_FILES['screenshot']['tmp_name'], $path . basename($_FILES['screenshot']['name']));
    echo "L'envoi a bien été effectué !";
}
?>
```

## Points à retenir

- Utilisez `enctype="multipart/form-data"` dans le formulaire HTML pour autoriser l'envoi de fichiers.
- La validation des fichiers envoyés en PHP inclut la vérification de la taille, de l'extension et de l'existence du dossier de destination.
- Assurez-vous que le dossier de stockage a les bons droits d'écriture.
- Soyez vigilant sur la sécurité pour éviter les failles d'exécution de scripts PHP non désirés.

En mettant en pratique ces techniques, vous pouvez permettre aux utilisateurs d'envoyer des fichiers sur votre site de manière sécurisée et contrôlée.
```
