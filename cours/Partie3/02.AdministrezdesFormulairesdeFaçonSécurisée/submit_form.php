<?php

if (
    isset($_POST["fname"]) &&
    isset($_POST["email"]) &&
    isset($_POST["subject"]) &&
    isset($_POST["message"])
) {
    $fname = htmlspecialchars($_POST["fname"]); // Sécurise le nom
    $email = $_POST["email"]; // Email ne nécessite pas de traitement spécial car il est validé avec FILTER_VALIDATE_EMAIL
    $subject = htmlspecialchars($_POST["subject"]); // Sécurise le sujet
    $message = htmlspecialchars($_POST["message"]); // Sécurise le message
    if (
        !empty($fname) &&
        filter_var($email, FILTER_VALIDATE_EMAIL) &&
        !empty($subject) &&
        !empty($message)
    ) {
        // Si toutes les données sont valides, afficher un message de succès
        echo '✅ Message envoyé avec succès 😉';
        return;
    } else {
        // Sinon, afficher un message d'erreur
        echo '❌ Il faut que le Nom, le sujet et le message soient correctement remplis !';
    }
}
