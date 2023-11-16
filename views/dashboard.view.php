<?php require 'partials/header.php' ?>
<h1>Dashboard</h1>
<div style="display: flex;justify-content:space-between">
    <a href="/note-new"><p class="btn" style="width: 100px;">Ajouter Note</p></a>
    <a href="/listusers"><p class="btn" style="width: 100px;">Gérer les utilisateurs</p></a>
</div>
<table style="margin: auto;">
    <tr>
        <th>#</th>
        <th>ID</th>
        <th>Image</th>
        <th>Title</th>
        <th>Content</th>
        <th>Author</th>
        <th>Action</th>
    </tr>
    <?php
    $i = 1;
    foreach ($notes as $note) {
    ?>
        <tr>
            <td><?= $i ?></td>
            <td><?= $note["id"] ?></td>
            <td class="mini"><img style="width: 100%;" src="/upload/<?= $note["image"] ?>" alt=""></td>
            <td><strong><?= $note["title"] ?></strong></td>
            <td class="content"><?= substr($note["content"], 0, 50) . "..." ?></td>
            <td><?= $note["name"] ?></td>
            <td style="display: flex;">
            <p><a href="/note?id=<?= $note['id'] ?>" class="btn">Visualiser cette article</a></p>
                <p><a href="/note-update?id=<?= $note['id'] ?>" class="btn">Modifier cette article</a></p>

                <p><a href="/note-delete?id=<?= $note['id'] ?>" onClick="return confirm('Etes vous certain de vouloir supprimer cette note !?');" class="btn error">
                        Supprimer cette note
                    </a></p>
            </td>
        </tr>

    <?php
        $i++;
    }
    ?>
</table>
<?php require 'partials/footer.php' ?>