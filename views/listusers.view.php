<?php require 'partials/header.php' ?>
<a href="/newuser"><p class="btn" style="width: 100px;">Ajouter un utilisateur</p></a>
<table>
    <tr>
        <th>User ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Action</th>
    </tr>
    <?php
    $i = 1;
    foreach ($users as $user) {
    ?>
        <tr>
            <td><?= $user["user_id"] ?></td>
            <td><?= $user["name"] ?></td>
            <td><?= $user["email"] ?></td>
            <td>
                <p><a href="/user-delete?id=<?= $user['user_id'] ?>" onClick="return confirm('Etes vous certain de vouloir supprimer cet utilisateur !?');" class="btn error">
                        Supprimer cet utilisateur
                    </a></p>
                    <p><a href="/user-update?id=<?= $user['user_id'] ?>" class="btn">Modifier cet utilisateur</a></p>
            </td>
        </tr>
    <?php
    }
    ?>
</table>
<?php require 'partials/footer.php' ?>