<?php
require_once '../../../model/database.php';

$id = $_GET['id'];
$image = getOneEntity("sejour", $id);
$liste_countries = getAllEntities("country");
$liste_tags = getAllEntities("tag");

$photo_liste_tags = getAllTagsByPhoto($id);
$photo_liste_tags_ids = [];
foreach ($photo_liste_tags as $tag) {
    $photo_liste_tags_ids[] = $tag["id"];
}

require_once '../../layout/header.php';
?>

<h1>Modification d'un séjour</h1>

<form action="update_query.php" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label>Titre</label>
        <input type="text" name="titre" value="<?php echo $sejour["title"]; ?>" class="form-control" placeholder="Titre" required>
    </div>
    <div class="form-group">
        <label>Image</label>
        <input type="file" name="image" class="form-control">
        <?php if ($sejour["image"]) : ?>
            <img src="../../../uploads/<?php echo $sejour["image"]; ?>" class="img-thumbnail">
        <?php endif; ?>
    </div>
    <div class="form-group">
        <label>Description courte</label>
        <textarea name="description" class="form-control"><?php echo $sejour["description_short"]; ?></textarea>
    </div>
    <div class="form-group">
        <label>Description</label>
        <textarea name="description" class="form-control"><?php echo $sejour["description"]; ?></textarea>
    </div>


    <input type="hidden" name="id" value="<?php echo $id; ?>"> 
    <button type="submit" class="btn btn-success">
        <i class="fa fa-check"></i>
        Modifier
    </button>
</form>

<?php require_once '../../layout/footer.php'; ?>