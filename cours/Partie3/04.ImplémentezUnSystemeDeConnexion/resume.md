# Implémentez un système de connexion

Dans ce chapitre, nous allons mettre en place un système de connexion sécurisé pour restreindre l'accès à certaines parties du site web. Voici un résumé des points clés abordés :

## 1. Création d'un formulaire de connexion

Nous commençons par créer un formulaire HTML permettant aux utilisateurs de saisir leur adresse e-mail et leur mot de passe.

```html
<form action="login.php" method="POST">
    <!-- Champs pour l'e-mail et le mot de passe -->
</form>
```

## 2. Validation des informations de connexion

En PHP, nous traitons les données soumises via le formulaire de connexion. Nous vérifions si l'e-mail est valide et si les informations de connexion correspondent à celles d'un utilisateur enregistré.

```php
// Traitement du formulaire de connexion
if (isset($_POST['email']) && isset($_POST['password'])) {
    // Validation des données et vérification des informations de connexion
}
```

## 3. Affichage des messages d'erreur ou de succès

Selon le résultat de la validation, nous affichons un message d'erreur si les informations de connexion sont incorrectes, sinon nous affichons un message de succès.

```php
// Affichage des messages d'erreur ou de succès
```

## 4. Restreindre l'accès aux contenus protégés

Sur la page principale (index.php), nous incluons le formulaire de connexion et limitons l'accès à certaines fonctionnalités du site uniquement aux utilisateurs connectés.

```php
// Inclusion du formulaire de connexion
// Affichage des recettes si l'utilisateur est connecté
```

En suivant ces étapes, nous avons créé un système de connexion fonctionnel qui permet aux utilisateurs d'accéder à des contenus protégés sur le site web.

Cet exercice nous a permis de consolider nos compétences en PHP, notamment dans la manipulation des formulaires et la gestion des sessions utilisateur pour restreindre l'accès aux contenus sensibles.

Maintenant que nous avons mis en place la connexion, le prochain chapitre abordera la conservation des données utilisateur à l'aide des sessions et des cookies.