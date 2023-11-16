<nav>
    <ul style="display: flex;align-items: center;">
        <li><a href="/">Acceuil</a></li>
        <li><a href="/notes">Notes</a></li>
        <?php if (@$_SESSION["status"] === "admin"){
        ?>
        <li><a href="/dashboard">Admin</a></li>
        <?php 
        } ?>
        
        <li><a href="/contact">Contact</a></li>
        <div style="display: flex;align-items:center;gap:1rem">
        <?php 
        if(!empty($_SESSION)){
            ?>
                <div class="avatar" style="width: 60px;overflow:hidden"><img style="width: 100%;;border-radius:50%" src="upload/<?= $_SESSION["avatar"] ?>" alt=""></div>
                <h1><?= $_SESSION["name"] ?></h1>
                <p><a href="/logout" class="btn logout">X</a></p>
            <?php
        }else {
        ?>
            <p><a href="/newuser" class="btn">S'inscrire</a></p>
            <p><a href="/login" class="btn">Se connecter</a></p>
        </div>
        <?php } ?>
    </ul>
</nav>