<?php require 'partials/header.php' ?>


<p>Créer un nouvel user</p>
<form method="POST" enctype="multipart/form-data">
    <label for="avatar">Avatar :</label>
    <input type="file" name="avatar" id="avatar">
    <label for="name">Name :</label>
    <input type="text" name="name" id="name" value="<?= isset($_POST['name']) ? $_POST['name'] : '' ?>">
    <label for="email">Email :</label>
    <input type="text" name="email" id="email" value="<?= isset($_POST['email']) ? $_POST['email'] : '' ?>">
    <label for="password">Mot de passe :</label>
    <input type="password" name="password" id="password" value="<?= isset($_POST['password']) ? $_POST['password'] : '' ?>">
    <label for="confirm_password">Confirmez votre mot de passe :</label>
    <input type="password" name="confirm_password" id="password" value="">
    
    
    <input type="submit" value="Ajouter">
</form>


<?php require 'partials/footer.php' ?>