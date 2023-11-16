<?php require 'partials/header.php'; ?>

<h2>Modifer cette note</h2>
<?php dbug($noteUpdate) ?>
<form method="POST">
    <label for="title">Titre :</label>
    <input type="text" name="title" id="title" value="<?= isset($_POST['title']) ? $_POST['title'] : $noteUpdate['title'] ?>">
    <label for="content">Contenu :</label>
    <textarea name="content" id="content" cols="30" rows="10"><?= isset($_POST['content']) ? $_POST['content'] : $noteUpdate['content'] ?></textarea>
    <label for="author">Auteur :</label>
    <select name="author" id="author">
        <option value=""></option>

        <?php foreach ($users as $user) : ?>
            
            <option value="<?= $user['user_id'] ?>"
           
           <?php 
           if (isset($_POST['author'])) :
            $author_id = (int) $_POST['author'];
           else:
            $author_id = (int) $noteUpdate['user_id'];
           endif;

           if ( isset($author_id) && ($author_id === $user['user_id']) ):  ?>
                    selected
          <?php endif; ?> 
            >
                <?= $user['name'] ?>
            </option>
        <?php endforeach; ?>
    </select>
    <input type="submit" value="Modifier">
</form>
<?php
if (isset($errors) && !empty($errors)) :
    foreach ($errors as $error) :
?>
    <p class="error"><?=$error?></p>    
    <!--<p class="error"><?//=$errors?></p>-->
<?php
        endforeach;
endif;
?>

<?php require 'partials/footer.php' ?>