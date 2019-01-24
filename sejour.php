<?php

require_once "model/database.php";
require_once "functions.php";



$id = $_GET["id"];
$sejour = getOneSejour($id);
$departs = getAllDepartsBySejour($id);


getHeader("Séjours", "Aztrek, site de voyage spécialisé dans les treks en Amérique centrale...")
?>


   
    <main>

        <section class="destinations">
            <div class="container">
                <div class="title-section">
                    <h2>Destinations</h2>
                    <h3><?= $sejour["title"]; ?></h3>
                </div>

                <article class="sejour-content d-flex">
                        <div class="card mb-3">
                                <img src="images/<?= $sejour["image"]; ?>" alt="<?= $sejour["title"] ; ?>" class="card-img-top">
                                    <div class="card-body">
                                        <ul class="list">
                                            <li class="binoculars"><i class="fas fa-binoculars"></i> <?= $sejour["category"] ; ?></li>
                                            <li class="pays"><i class="fas fa-globe-americas"></i> <?= $sejour["country"] ; ?></li>
                                            <li class="days"><i class="far fa-calendar-alt"></i> <?= $sejour["nb_days"] ; ?></li>
                                            <li class="nivel"><i class="fas fa-mountain"></i> <?= $sejour["levels"] ; ?></li>

                                        </ul>
                                      <h5 class="card-title text-info text-center"><?= $sejour["description_short"]; ?></h5>
                                      <p class="card-text"><?= $sejour["description"]; ?></p>
                                    </div>
                              </div>
                       
<!--                         <div class="col-sm-4 text-center">-->
<!---->
<!--                                      <div class="">-->
<!--                                          --><?php //include "include/sejour_inc.php" ?>
<!--                                      </div>-->
<!---->
<!--                             </div>-->

                </article>


</section>
     


        <section class="departure container">

                <div class="title-section">
                        <h2>En route vers l'aventure</h2>
                        <h3 class = "text-info">Départs</h3>
                    </div>

                <table class="table table-striped text-center">
                        <thead>
                          <tr class="bg-primary text-light">
                            <th scope="col">Date départ</th>
                            <th scope="col">Prix</th>
                              <th scope="col">Places disponibles</th>
                            <th scope="col">Réserver</th>
                          </tr>
                        </thead>
                        <tbody>

<!--                        boucle pour afficher la liste des départs-->
                            <?php foreach ($departs as $depart): ?>
                          <tr>

                            <th scope="row"><?= $depart["date_departure"] ; ?></th>
                            <td><?= $depart["price"] ; ?></td>
                              <td><?= $depart["seat_available"] ; ?></td>
                            <td><a class="btn btn-info mx-auto" href="<?=SITE_URL ?>/create_account.php">S'inscire</a></td>

                           
                          </tr>
                            <?php endforeach; ?>

                        </tbody>
                      </table>




        </section>
        <section class="comments">
            <div class="container">
                <div class="title-section">
                    <h2>#Top Stories</h2>
                    <h3 class="text-danger">Avis de nos voyageurs</h3>
                    <p>Aztrek c’est une grande communauté de voyageurs passionnés. Découvrez leurs retours
                        d’expériences et
                        leurs avis sur leurs voyages au Costa Rica</p>
                </div>
                <div class="form-group">
                    <label for="email">Email :</label>
                    <input type="email" class="form-control" id="email" placeholder="Ecrire votre adresse email">
                </div>

                <div class="form-group">
                    <label for="comment">Laisser votre avis</label>
                    <textarea class="form-control" rows="5" id="comment" placeholder="Saisir votre avis"></textarea>
                </div>
                <button type="submit" class="btn bg-danger">Envoyer</button>

        </section>

        <section class="expert">
            <div class="container">
                <div class="title-section">
                    <h2>Avis d'Experts</h2>
                    <h3>Conseils</h3>
                </div>
                <p><i class="fas fa-quote-left fa-2x"></i> Retour de voyage au Costa Rica,
                une très belle destination 100% nature,
                riche d’une faune et d’une flore uniques. 
                Les moments forts : dans la jungle, jumelles
                vissées aux yeux, à l’affût de toute la vie sauvage qui nous entoure : paresseux, singes, grenouilles, iguanes, perroquets, toucans, papillons, quetzals !! On en prend plein les yeux, un vrai bonheur !! Et la liste est longue ; pour vous donner une idée de ce qui vous attend : le pays compte plus de 850 espèces d’oiseau.
                Clara, conseillère voyage <i class="fas fa-quote-right fa-2x"></i></p>

              
                
            </div>

        </section>
    </main>


<?php getFooter();?>