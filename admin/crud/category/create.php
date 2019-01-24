<?php
require_once '../../../model/database.php';

$categories = getAllEntities("category");

require_once '../../layout/header.php';
?>

<h1>Ajout d'une catégorie</h1>

<form action="create_query.php" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label>Libellé</label>
        <input type="text" name="label" class="form-control" placeholder="Titre" required>
    </div>


    <button type="submit" class="btn btn-success">
        <i class="fa fa-check"></i>
        Ajouter
    </button>
</form>

<?php require_once '../../layout/footer.php'; ?>



