<?php require 'partials/header.php' ?>
<form method="POST">
    <label for="email">Email :</label>
    <input type="text" name="email" id="email" value="<?= isset($_POST['email']) ? $_POST['email'] : '' ?>">
    <label for="password">Mot de passe :</label>
    <input type="password" name="password" id="password" value="<?= isset($_POST['password']) ? $_POST['password'] : '' ?>">
    <input type="submit" value="Connecter">
</form>
<?php require 'partials/footer.php' ?>