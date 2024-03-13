<form action="submit_contact.php" method="POST" enctype="multipart/form-data">

    <!-- <div class="inputGroup">
        <label for="fName">Prénom</label>
        <input type="text" name="fName" id="fName" fName placeholder="votre prénom">
    </div>

    <div class="inputGroup">
        <label for="lName">Nom</label>
        <input type="text" name="lName" id="lName" fName placeholder="votre nom">
    </div>

    <div class="inputGroup">
        <label for="lName">Sujet du message</label>
        <select name="sujet" id="sujet">

            <option value="">--choisir sujet--</option>
            <option value="réclamation">réclamation</option>
            <option value="bug">bug</option>
            <option value="login">login</option>
        </select>
    </div> -->

    <div class="inputGroup">
        <label for="screenshot" class="form-label">Votre capture d'écran</label>
        <input type="file" class="form-control" id="screenshot" name="screenshot" />
    </div>

    <button>Envoyer</button>
</form>