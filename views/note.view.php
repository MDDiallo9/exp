<?php require 'partials/header.php' ?>
<img src="upload/<?= $note["image"] ?>" alt=""> 
<h2><?= $note['title'] ?></h2>
<p><?= $note['content'] ?></p>
<p>Publiée le <?= $note['created_at'] ?> par <strong><?= $note['name'] ?></strong></p>

<p><a href="/note-update?id=<?=$note['id']?>" class="btn">Modifier cette article</a></p>

<p><a href="/note-delete?id=<?=$note['id']?>" onClick="return confirm('Etes vous certain de vouloir supprimer cette note !?');" class="btn error">
Supprimer cette note
</a></p>

<p><a href="/notes" class="btn">Retour à la liste des notes</a></p>
<?php require 'partials/footer.php' ?>