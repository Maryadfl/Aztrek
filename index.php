
<?php
require_once "model/database.php";
require_once "functions.php";


$countries = getAllEntities("country");

getHeader("Accueil", "Aztrek, site de voyage spécialisé dans les treks en Amérique centrale...");

?>

    <section class="options">
        <div class="filter">
            <select id="destination" name="destinations">
                <option value="destination">Destinations</option>
                <option value="mexique">Mexique</option>
                <option value="Costa Rica">Costa Rica</option>
                <option value="salvador">Salvador</option>
                <option value="guatemala">Guatemala</option>
                <option value="honduras">Honduras</option>
            </select>

            <select id="activites" name="activites">
                <option value="activités">Activités</option>
                <option value="trekking">Trekking</option>
                <option value="culture">Culture</option>
                <option value="archeologie">Archéologie</option>
                <option value="autotour">Autotour</option>
                <option value="special volcans">Spécial Volcans</option>
            </select>
            <select id="budget" name="budget">
                <option value="budget">Budget</option>
                <option value="trekking">Trekking</option>
                <option value="culture">Culture</option>
                <option value="archeologie">Archéologie</option>
                <option value="autotour">Autotour</option>
                <option value="special volcans">Spécial Volcans</option>
            </select>
            <select id="duree" name="duree">
                <option value="duree">Durée</option>
                <option value="7">7 jours</option>
                <option value="14">14 jours</option>
                <option value="21">21 jours</option>
            </select>
            <button type="submit">Valider</button>
        </div>
    </section>
    <main>




        <section class="destinations">
            <div class="container">
                <div class="title-section">
                    <h2>Destinations</h2>
                    <h3>Où partir ?</h3>
                </div>
                <div class="gallery">

                    <div class="item">
                        <div class="contim">
                            <img src="./images/pyramid-1649598_640.jpg" alt="mexique">
                            <h4>Mexique</h4>
                        </div>

                        <div class="continfos">

                            <p>Nos treks au Mexique couvre l’essentiel de l’aire culturelle maya, passant notamment
                                par
                                le
                                Mexique, le Guatemala et le Belize.</p>
                            <a href="pays.php" class="btn-hover">Découvrir</a>
                        </div>
                    </div>




                    <div class="item">
                        <div class="contim">
                            <img src="./images/Costa-Rica-floute.jpg" alt="costarica">
                            <h4>Costa Rica</h4>
                        </div>
                        <div class="continfos">
                            <p>Nos treks au Costa Rica couvre l’essentiel de l’aire culturelle maya, passant
                                notamment par
                                le Mexique, le Guatemala et le Belize.</p>
                            <a href="pays.php" class="btn-hover">Découvrir</a>
                        </div>
                    </div>

                    <div class="item">
                        <div class="contim">
                            <img src="./images/salvador.jpg" alt="salvador">
                            <h4>Salvador</h4>
                        </div>
                        <div class="continfos">
                            <p>Nos treks au Salvador couvre l’essentiel de l’aire culturelle maya, passant notamment
                                par le
                                Mexique, le Guatemala et le Belize.</p>
                            <a href="pays.php" class="btn-hover">Découvrir</a>
                        </div>
                    </div>

                    <div class="item">
                        <div class="contim">
                            <img src="./images/guatemala2.jpg" alt="guatemala">
                            <h4>Guatemala</h4>
                        </div>
                        <div class="continfos">
                            <p>Nos treks au Guatemala couvre l’essentiel de l’aire culturelle maya, passant notamment
                                par
                                le Mexique, le Guatemala et le Belize.</p>
                            <a href="pays.php" class="btn-hover">Découvrir</a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="contim">
                            <img src="./images/honduras.jpg" alt="Honduras">
                            <h4>Honduras</h4>
                        </div>
                        <div class="continfos">
                            <p>Nos treks au Honduras couvre l’essentiel de l’aire culturelle maya, passant notamment
                                par le
                                Mexique, le Guatemala et le Belize.</p>
                            <a href="pays.php" class="btn-hover">Découvrir</a>
                        </div>
                    </div>
                    <div class="item-contenu">
                        <div class="contenu-contim">

                            <h4>Carnet de voyage</h4>
                            <p>Découvrez toutes nos pépites dans toutes nos destinations</p>
                            <a href="" class="btn-hover">Découvrir</a>
                        </div>
                    </div>

                </div>
                <a href="pays.php" class="btn-discover btn-small">Toutes les destinations</a>

            </div>
        </section>


        <section class="activites container">
            <div class="title-section">
                <h2>Aventures</h2>
                <h3>Commencez votre aventure</h3>
            </div>

            <div class="slider owl-carousel owl-theme">
                <article class="article-activites">

                    <div class="photo">
                        <img src="./images/trekking2.jpg" alt="">
                        <h4>Trekking</h4>
                    </div>
                    <div class="photoinfos">
                        <p>L’Amérique centrale regorge de merveilles culturelles. Découvrez cette région du globe dans
                            toute son authenticité.</p>

                        <a href="pays.php" class="btn-activity">Découvrir</a>
                    </div>

                </article>

                <article class="article-activites">
                    <div class="photo">
                        <img src="./images/culture.jpg" alt="">
                        <h4>Culture</h4>
                    </div>
                    <div class="photoinfos">

                        <p>L’Amérique centrale regorge de merveilles culturelles. Découvrez cette région du globe dans
                            toute son authenticité.</p>
                        <a href="pays.php" class="btn-activity">Découvrir</a>
                    </div>
                </article>

                <article class="article-activites">
                    <div class="photo">
                        <h4>Archeologie</h4>
                        <img src="./images/archeologie.jpg" alt="">
                    </div>
                    <div class="photoinfos">

                        <p>L’Amérique centrale regorge de merveilles culturelles. Découvrez cette région du globe dans
                            toute son authenticité.</p>
                        <a href="sejour.php" class="btn-activity">Découvrir</a>
                    </div>
                </article>

                <article class="article-activites">
                    <div class="photo">
                        <img src="./images/autotour.jpg" alt="">
                        <h4>Autotour</h4>
                    </div>
                    <div class="photoinfos">

                        <p>L’Amérique centrale regorge de merveilles culturelles. Découvrez cette région du globe dans
                            toute son authenticité.</p>
                        <a href="pays.php" class="btn-activity">Découvrir</a>
                    </div>

                </article>

                <article class="article-activites">
                    <div class="photo">
                        <img src="./images/volcan.jpg" alt="">
                        <h4>Special volcans</h4>
                    </div>
                    <div class="photoinfos">

                        <p>L’Amérique centrale regorge de merveilles culturelles. Découvrez cette région du globe dans
                            toute son authenticité.</p>
                        <a href="pays.php" class="btn-activity">Découvrir</a>
                    </div>
                </article>

            </div>

            <a href="pays.php" class="btn-discover">Toutes les activités</a>


        </section>

        <section class="selection">
            <div class="container">
                <div class="title-section">
                    <h2>Coup de coeur</h2>
                    <h3>Voyage Insolite</h3>
                </div>
                <a href="" class="btn-discover">Découvrir</a>

            </div>

        </section>

        <section class="partage">
            <div class="container">
                <div class="title-section">
                    <h2>#Top Stories</h2>
                    <h3>Carnets de voyage</h3>
                    <p>Aztrek c’est une grande communauté de voyageurs passionnés. Découvrez leurs retours
                        d’expériences et
                        leurs avis sur leurs voyages aux quatre coins du monde accompagnés par nos agents locaux.</p>
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

        <section class="endirect">
            <div class="container">
                <div class="title-section">
                    <h2>Aztrekmoments</h2>
                    <h3># En direct</h3>
                </div>
                <p>Retrouvez les aventures de nos explorateurs sur Instagram avec le #Astrekmoments. Rejoignez la
                    communauté et partagez des expériences inoubliables.</p>

                <div class="interview owl-carousel owl-theme">
                    <article class="item">
                        <div class="item-img"><a href=""><img src="./images/insta1.jpg" alt=""></a></div>
                    </article>

                    <article class="item">
                        <div class="item-img"><a href=""><img src="./images/insta2.jpg" alt=""></a></div>

                    </article>

                    <article class="item">
                        <div class="item-img"><a href=""><img src="./images/insta3.jpg" alt=""></a></div>

                    </article>

                </div>
                <div class="instagram">
                    <p>RENDEZ-VOUS DÈS MAINTENANT SUR NOTRE PAGE INSTAGRAM ET PARTAGEZ VOS AVENTURES EN DIRECT</p>
                    <a href=""><img src="./images/instagramrouge.png" alt="instagram"></a>
                </div>
            </div>

        </section>
    </main>

<?php getFooter();?>