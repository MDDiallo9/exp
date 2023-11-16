<?php require 'partials/header.php' ?>
<section class="note">

    <?php
    $i = 1;
    foreach ($notes as $note) : ?>
        <p>
            <?= $i ?> - <a href="/note?id=<?= $note['id'] ?>">
                <?= $note['title'] ?>
            </a>
        </p>
    <?php
        $i = $i + 1;
    endforeach; ?>

</section>
<p><a href="/note-new" class="btn">Ajouter une note</a></p>

<?php require 'partials/footer.php' ?>