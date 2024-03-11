<?php

$title = "Formulaire de contact"

?>

        <form action="submit_form.php" method="POST">

        <h2><?php echo $title ?></h2>

            <div class="inputGroup">
                <label for="fname">Nom</label>
                <input type="text" name="fname" id="fname">
            </div>

            <div class="inputGroup">
                <label for="email">e-mail</label>
                <input type="email" name="email" id="email">
            </div>

            <div class="inputGroup">
                <label for="subject">Sujet du message</label>
                <input type="text" name="subject" id="subject">
            </div>

            <div class="inputGroup">
                <label for="message">Votre message</label>
                <textarea name="message" id="message" cols="30" rows="10" placeholder="votre message"></textarea>
            </div>

            <button>Envoyer</button>
        </form>
