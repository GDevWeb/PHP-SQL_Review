<?php 

$titlePage = "Tp - Activez le partage de fichier";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/base.css">
    <title><?php echo $titlePage ?></title>
</head>
<body>

<div id="mainContainer">
    <?php include_once("templates/header.php") ?>
    <main>

    <?php include_once("form.php") ?>

    </main>
    <?php include_once("templates/footer.php") ?>
</div>
    
</body>
</html>