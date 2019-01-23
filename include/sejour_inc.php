<div class="thumbnail">
    <img src= "uploads/<?= $sejour["image"]; ?>" alt="<?= $sejour["title"] ; ?>" width="400" height="300">
    <h5 class="card-title"><a href="sejour.php?id=<?= $sejour["id"]; ?>"><?= $sejour["title"]; ?></a></h5>
    <ul class="list">
        <li class="pays"><i class="fas fa-globe-americas"></i> <?= $sejour["country"] ; ?></li>
        <li class="days"><i class="far fa-calendar-alt"></i> <?= $sejour["nb_days"] ; ?></li>
        <li class="nivel"><i class="fas fa-mountain"></i> <?= $sejour["levels"] ; ?></li>
    </ul>

    <p class="card-text">
        <?= $sejour["description_short"]; ?>
    </p>


    <a href="sejour.php?id=<?= $sejour["id"]; ?>" class="btn btn-primary ">Découvrir</a>
</div>
