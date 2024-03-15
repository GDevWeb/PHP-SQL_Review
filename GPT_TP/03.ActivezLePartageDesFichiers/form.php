<link rel="stylesheet" href="CSS/form.css">

<form action="submit_form.php" method="POST" enctype="multipart/form-data" id="formResume">

<div class="inputGroup">
    <label for="fName">Prénom</label>
    <input type="text" name="fName" id="fName">
    <div class="errorInputMessage Fname"></div>
</div>

<div class="inputGroup">
    <label for="lName">Nom</label>
    <input type="text" name="lName" id="lName">
    <div class="errorInputMessage Lname"></div>
</div>

<div class="inputGroup">
    <label for="email">Mail</label>
    <input type="text" name="email" id="email">
    <div class="errorInputMessage email"></div>
</div>

<div class="inputGroup">
    <label for="telephone">Téléphone</label>
    <input type="tel" name="telephone" id="telephone">
    <div class="errorInputMessage telephone"></div>
</div>

<div class="inputGroup">
    <label for="file">Votre CV</label>
    <input type="file" name="file" id="file">
    <div class="errorInputMessage file"></div>
</div>

<button type="submit">Envoyer</button>

</form>

<script src="javascript/form.js"></script>