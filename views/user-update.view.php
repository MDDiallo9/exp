<?php require 'partials/header.php' ?>
<h1>User Update</h1>
<form method="POST">
    <label for="name">Name :</label>
    <input type="text" name="name" id="name" value="<?= $userUpdate['name'] ?>">
    <label for="email">Email :</label>
    <input type="text" name="email" id="email" value="<?= $userUpdate['email'] ?>">
    <label for="password">Mot de passe :</label>
    <input type="password" name="password" id="password" value="<?= $userUpdate['password'] ?>">
    
    
    <input type="submit" value="Modifier">
</form>

<?php require 'partials/footer.php' ?>