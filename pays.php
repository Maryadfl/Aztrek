<?php

require_once "model/database.php";
require_once "functions.php";

$id = $_GET["id"];
$country = getOneEntity("country", $id);
$sejours = getAllSejoursByCountry($id);

getHeader("Destinations", "Aztrek, site de voyage spécialisé dans les treks en Amérique centrale...")
?>

<main>

    <section class="destinations">
        <div class="container">
            <div class="title-section">
                <h2>Destinations</h2>
                <h3><?= $country["label"]; ?></h3>
            </div>

            <article class="textpays text-center">
                <?= $country["description"]; ?>
            </article>


            <div class="gallery">
                <div class="row text-center">

                    <?php foreach ($sejours as $sejour) : ?>

                        <div class="col-sm-4">
                            <?php include "include/sejour_inc.php" ?>
                        </div>
                    <?php endforeach; ?>


                </div>

    </section>


    <section class="partage">
        <div class="container">
            <div class="title-section">
                <h2>#Top Stories</h2>
                <h3>Carnets de voyage Costa Rica</h3>
                <p>Aztrek c’est une grande communauté de voyageurs passionnés. Découvrez leurs retours
                    d’expériences et
                    leurs avis sur leurs voyages au Costa Rica</p>
            </div>


            <div class="interviews">
                <article class="travelbook">
                    <div class="interview-img"><a href=""><img src="./images/story1.jpg" alt=""></a></div>
                    <div class="interview-infos">
                        <p>Un dépaysement total, des kilomètres parcourus, nous en avons eu plein les yeux durant
                            ce circuit à la rencontre des mayas.</p>

                    </div>
                </article>

                <article class="travelbook">
                    <div class="interview-img"><a href=""><img src="./images/volcan.jpg" alt=""></a></div>
                    <div class="interview-infos">
                        <p>Un dépaysement total, des kilomètres parcourus, nous en avons eu plein les yeux durant
                            ce circuit à la rencontre des mayas.</p>

                    </div>
                </article>
                <article class="travelbook">
                    <div class="interview-img"><a href=""><img src="./images/carnet3.jpg" alt=""></a></div>
                    <div class="
                                interview-infos">
                        <p>Un dépaysement total, des kilomètres parcourus, nous en avons eu plein les yeux durant
                            ce circuit à la rencontre des mayas.</p>

                    </div>
                </article>


            </div>
            <a href="" class="btn-discover">En savoir plus</a>


        </div>


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
                vissées aux yeux, à l’affût de toute la vie sauvage qui nous entoure : paresseux, singes,
                grenouilles, iguanes, perroquets, toucans, papillons, quetzals !! On en prend plein les yeux, un
                vrai bonheur !! Et la liste est longue ; pour vous donner une idée de ce qui vous attend : le pays
                compte plus de 850 espèces d’oiseau.
                Clara, conseillère voyage <i class="fas fa-quote-right fa-2x"></i></p>


        </div>

    </section>
</main>


<?php getFooter(); ?>