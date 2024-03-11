## Administrez des formulaires de façon sécurisée

Dans ce cours, nous allons approfondir la sécurisation des formulaires web en utilisant PHP. Les formulaires constituent un moyen essentiel pour les utilisateurs d'interagir avec votre site web, mais ils peuvent également présenter des risques de sécurité si les données ne sont pas traitées correctement.

### Base du formulaire en HTML

Pour commencer, rappelons que les formulaires en HTML sont créés à l'aide de la balise `<form>`. Cette balise comporte deux attributs importants : `method` et `action`.

- L'attribut `method` spécifie la méthode HTTP à utiliser pour soumettre les données, généralement `GET` ou `POST`.
- L'attribut `action` spécifie l'URL de la page qui recevra les données du formulaire.

### Choix de la méthode de soumission des données

Il est recommandé d'utiliser la méthode `POST` pour soumettre les données du formulaire. Cette méthode permet d'envoyer des données de manière sécurisée sans les afficher dans l'URL.

### Sécurisation des données transmises

Lorsque les données sont soumises par un formulaire, elles sont accessibles via la superglobale `$_POST` en PHP. Il est crucial de valider et de nettoyer ces données pour éviter les attaques potentielles.

### Protection contre la faille XSS

La faille XSS (cross-site scripting) est une vulnérabilité courante qui peut permettre à des attaquants d'injecter du code JavaScript malveillant dans vos pages web. Pour se protéger contre cette faille, il est essentiel d'échapper les caractères spéciaux et de filtrer le contenu des champs de texte en utilisant des fonctions telles que `htmlspecialchars` ou `strip_tags`.

### Exemple de code sécurisé

Voici un exemple de code PHP sécurisé pour traiter les données soumises par un formulaire :

```php
$postData = $_POST;

if (
    !isset($postData['email'])
    || !filter_var($postData['email'], FILTER_VALIDATE_EMAIL)
    || empty($postData['message'])
    || trim($postData['message']) === ''
) {
    echo('Il faut un email et un message valides pour soumettre le formulaire.');
    return;
}
```

Ce code vérifie si les champs requis sont présents et si les données sont valides avant de les traiter. De plus, il échappe le contenu du champ de message pour se protéger contre les attaques XSS.

### Conclusion

En sécurisant vos formulaires web, vous pouvez protéger votre site contre les attaques potentielles et garantir une expérience utilisateur sûre. Assurez-vous de toujours valider et nettoyer les données soumises par les utilisateurs pour éviter les vulnérabilités de sécurité.