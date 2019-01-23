<?php
require_once '../../../model/database.php';

$id = $_GET['id'];
$country = getOneEntity("country", $id);

require_once '../../layout/header.php';
?>

<h1>Modification d'un pays</h1>

<form action="update_query.php" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label>Libellé</label>
        <input type="text" name="label" value="<?php echo $country["label"]; ?>" class="form-control" placeholder="Libellé" required>
    </div>
    <div class="form-group">
        <label>Image</label>
        <input type="file" name="image" class="form-control">
        <?php if ($country["image"]) : ?>
            <img src="../../../uploads/<?php echo $country["image"]; ?>" class="img-thumbnail">
        <?php endif; ?>
    </div>
    <div class="form-group">
        <label>Description</label>
        <textarea name="description" class="form-control"><?php echo $country["description"]; ?></textarea>
    </div>

    <input type="hidden" name="id" value="<?php echo $id; ?>"> 
    <button type="submit" class="btn btn-success">
        <i class="fa fa-check"></i>
        Modifier
    </button>
</form>

<?php require_once '../../layout/footer.php'; ?>