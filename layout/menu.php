<?php
require_once __DIR__ . "/../config/parameters.php";

require_once __DIR__ . "/../functions.php";

$countries = getAllEntities("country");


?>
<nav class="main-nav">
    <ul>
        <li class="has-sublist">
            <a href="#">Nos destinations</a>
            <ul>
                <li>
                    <?php foreach ($countries as $country): ?>
                        <a href="pays.php?id=<?= $country["id"]; ?>">
                            <?= $country["label"]; ?>
                        </a>
                    <?php endforeach; ?>
                </li>
            </ul>

        </li>
        <li class="has-sublist">
            <a href="#">Explorer</a>
            <ul>
                <li>
                    <a href="#">Trek</a>
                    <a href="#">Culture</a>
                    <a href="#">Archéologie</a>
                    <a href="#">Autotour</a>
                    <a href="#">Spécial volcans</a>
                </li>
            </ul>

        </li>
        <li><a href="#">Partager</a></li>
        <li><a href="#">A propos</a></li>
    </ul>
</nav>

<div class="icon-bar">
    <?php if (isset($user)) : ?>
        <a href="admin/logout.php">Déconnexion</a>
    <?php else: ?>
        <a href="#" data-toggle="modal" data-target="#exampleModal"><img src="./images/user.png" alt=""></a>
    <?php endif; ?>
    <a href="#"><img src="./images/favoris.png" alt=""></a>
    <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Rechercher" aria-label="Search">
        <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Ok</button>
    </form>
</div>
