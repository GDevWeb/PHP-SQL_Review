<?php 

$titlePage = "Comment gérer les erreurs ?";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titlePage ?></title>
</head>
<body>

<h1><?php echo $titlePage ?></h1>

<h3>Les 3 types d'erreurs courantes</h3>

<h4>Parse error</h4>


<h4>Undefined function</h4>

<h4>"Undefined function" = si vous utilisez une fonction non reconnue</h4>

<h4>"Wrong parameter count" = si vous entrez un nombre incorrect de paramètres pour une fonction</h4>

<h3>Découvrez ces erreurs plus rares</h3>

<h4>"Headers already sent by…" = si vous écrivez du code au mauvais endroit</h4>

<p><i>Les "headers" sont des informations d'en-tête  qui sont envoyées avant toute chose au navigateur du visiteur.</i></p>

En PHP, la fonction qui permet d'envoyer des informations de "headers" s'appelle  header() 

. Il y a d'autres fonctions qui envoient des "headers" toutes seules. C'est le cas de :

 session_start() 

 setcookie()


<h4>"L'image contient des erreurs" = si vous avez fait une erreur d'utilisation de la librairie GD</h4>

C'est le navigateur qui vous donne ce message d'erreur, et non pas PHP.

Ce message survient lorsque vous travaillez avec la bibliothèque GD.

Si vous avez fait une erreur dans votre code (par exemple une banale « parse error »), cette erreur sera inscrite dans l'image. Du coup, l'image ne sera pas valide et le navigateur ne pourra pas l'afficher.

Bon, d'accord, l'erreur est dans l'image. Mais comment faire pour faire « apparaître » l'erreur ?

<h4>"Maximum execution time exceeded" = si vous avez fait une boucle infinie</h4>

<p><i>Ça, c'est le genre d'erreur qui arrive le plus souvent à cause d'une boucle infinie !</i></p>

Fatal error: Maximum execution time exceeded in fichier.php on line 57
Imaginez que vous fassiez une boucle while mais que celle-ci ne s'arrête jamais : votre script PHP va tourner en boucle sans jamais s'arrêter.

Heureusement, PHP limite le temps d'exécution d'une page PHP à 30 secondes par défaut.

Si une page met plus de 30 secondes à se générer, PHP arrête tout en signalant que c'est trop long. Et il fait bien, parce que sinon cela pourrait ralentir tout le serveur et rendre votre site inaccessible !

Voici un exemple de boucle while qui ne s'arrêtera jamais :

<?php
// $counter = 5;
// while ($counter === 5)
// {
//     echo 'Zéro ';
// }
?>
Comme vous pouvez le voir, un tel code PHP ne s'arrêtera jamais parce que $counter vaut toujours 5…

Si vous avez donc l'erreur "Maximum execution time exceeded", il va falloir repérer une boucle qui ne s'arrête jamais, car c'est elle qui provoque ce problème.

Rassurez-vous : la limite est fixée à 30 secondes, mais vous n'y serez jamais confronté. En général, un serveur met moins de 50 millisecondes à charger une page PHP. On est très loin des 30 secondes !

    
</body>
</html>