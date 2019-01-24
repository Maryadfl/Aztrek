<?php
require_once '../../../model/database.php';

$id = $_GET['id'];
$sejour = getOneEntity("sejour", $id);
$countries = getAllEntities("country");
$levels = getAllEntities("levels");
$categories = getAllEntities("category");


require_once '../../layout/header.php';
?>

<h1>Modification d'un séjour</h1>

<form action="update_query.php" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label>Titre</label>
        <input type="text" name="title" value="<?php echo $sejour["title"]; ?>" class="form-control" placeholder="Titre" required>
    </div>
    <div class="form-group">
        <label>Image</label>
        <input type="file" name="image" class="form-control">
        <?php if ($sejour["image"]) : ?>
            <img src="../../../uploads/<?php echo $sejour["image"]; ?>" class="img-thumbnail">
        <?php endif; ?>
    </div>
    <div class="form-group">
        <label>Pays</label>
        <select name="country_id" class="form-control">
            <?php foreach ($countries as $country) : ?>
                <option value="<?php echo $country["id"]; ?>">
                    <?php echo $country["label"]; ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="form-group">
        <label>Niveau</label>
        <select name="levels_id" class="form-control">
            <?php foreach ($levels as $level) : ?>
                <option value="<?php echo $level["id"]; ?>">
                    <?php echo $level["label"]; ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="form-group">
        <label>Catégorie</label>
        <select name="category_id" class="form-control">
            <?php foreach ($categories as $category) : ?>
                <option value="<?php echo $category["id"]; ?>">
                    <?php echo $category["label"]; ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="form-group">
        <label>Nombre de jours</label>
        <input type="number" name="nb_days" class="form-control" value="<?php echo $sejour["nb_days"]; ?>" required>
    </div>
    <div class="form-group">
        <label>Description courte</label>
        <textarea name="description_short" class="form-control"><?php echo $sejour["description_short"]; ?></textarea>
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