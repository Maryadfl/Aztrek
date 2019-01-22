<?php


require_once "model/database.php";
require_once "functions.php";


getHeader("Créer un compte", "Aztrek, agence de voyages en Amérique centrale");


?>


<main class="container">

    <div class="title-section">
        <h2>Espace personnel</h2>
        <h3 class="text-info">Créer votre compte</h3>
    </div>

    <form class="form-horizontal" action="create_account_query.php" method="post">
        <div class="form-group">
            <label class="control-label col-sm-2" for="name">Nom</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="name" placeholder="Nom">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="surname">Prénom</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="surname" placeholder="Prénom">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Email</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="email" placeholder="Entrer votre email">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="password">Mot de passe</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="password" placeholder="Entrer un mot de passe">
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-info">Créer un compte</button>
            </div>
        </div>
    </form>



</main>

<?php getFooter(); ?>


