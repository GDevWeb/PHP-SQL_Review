## Écoutez la requête de vos utilisateurs grâce aux URL

Dans ce cours, nous allons explorer comment utiliser les URL pour transmettre des informations entre les pages web et comment manipuler ces données avec PHP.

### Qu'est-ce qu'une URL ?

Une URL (Uniform Resource Locator) est une adresse unique qui permet d'accéder à une ressource sur le Web. Par exemple, `https://www.openclassrooms.com` est une URL.

### Envoyer des paramètres dans une URL

Les URL peuvent être utilisées pour transmettre des informations d'une page à une autre. Cela se fait en ajoutant des paramètres à la fin de l'URL. Par exemple :

```
http://www.monsite.com/page.php?nom=Dupont&prenom=Jean
```

Dans cet exemple, les paramètres `nom` et `prenom` sont transmis à la page `page.php`.

### Créer un lien avec des paramètres

Pour créer un lien avec des paramètres dans HTML, on utilise la balise `<a>` avec l'attribut `href`. Par exemple :

```html
<a href="bonjour.php?nom=Dupont&amp;prenom=Jean">Dis-moi bonjour !</a>
```

### Récupérer les paramètres en PHP

En PHP, les paramètres transmis via une URL peuvent être récupérés grâce à la superglobale `$_GET`. Par exemple :

```php
$nom = $_GET['nom'];
$prenom = $_GET['prenom'];
echo 'Bonjour ' . $nom . ' ' . $prenom;
```

### Contrôler les paramètres

Il est important de vérifier les paramètres reçus pour éviter les erreurs et les manipulations malveillantes. On peut utiliser des fonctions comme `isset()`, `filter_var()`, `trim()` et `empty()` pour valider et nettoyer les données.

### Conclusion

Les URL sont un moyen puissant de transmettre des informations entre les pages web. En comprenant comment manipuler les paramètres d'une URL en PHP, vous pouvez créer des applications web dynamiques et réactives.