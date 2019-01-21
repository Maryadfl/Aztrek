<?php
getHeader("Accueil", "Aztrek, site de voyage spécialisé dans les treks en Amérique centrale...")
?>
   
    <main>

        <section class="destinations">
            <div class="container">
                <div class="title-section">
                    <h2>Destinations</h2>
                    <h3>L'intégrale du Costa Rica</h3>
                </div>

                <article class="sejour-content d-flex">
                        <div class="card mb-3">
                                <img src="./images/costaricasejour.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h5 class="card-title">Circuit hors des sentiers battus</h5>
                                  <p class="card-text">Trois semaines ne sont pas de trop pour découvrir le Costa Rica, pays-modèle en matière d'écotourisme. De parcs nationaux en réserves, d’une côte à l’autre nous découvrons toute une palette d’écosystèmes, de la forêt sèche du Guanacaste à la forêt brumeuse de San Gerardo en passant par celle, tropicale, du magnifique Corcovado. Les paysages se suivent et ne se ressemblent pas : volcans, cascades, rivières, plages sauvages et jungle… Ce voyage est aussi l’occasion d’aller à la rencontre de la population : les Bribris, une ethnie de la côte caraïbe, une famille à Turrialba, des cultivateurs de café, de cœurs de palmier ou d’ananas biologiques. </p>
                                  
                                </div>
                              </div>
                       
                        
                              <div class="col-sm-4">
                                    <div class="thumbnail">
                                      <img src="./images/circuit2.jpg" alt="" width="400" height="300">
                                      <h5 class="card-title">L'intégrale du Costa Rica</h5>
                                      <ul class="list">
                                              <li class="pays"><i class="fas fa-globe-americas"></i> Costa Rica</li>
                                              <li class="days"><i class="far fa-calendar-alt"></i> 14 jours</li>
                                              <li class="nivel"><i class="fas fa-mountain"></i> Moyen</li>
                                          </ul>
  
                                      <p class="card-text">
                                              Cet itinéraire bien rythmé, spécial biodiversité, 100% nature, 100% actif.
  
                                      </p>
                                          <p class="prix text-center">
                                                  A partir de : 2990 €
                                              </p>
          
                                              <a href="#" class="btn btn-primary ">Découvrir</a>
                                    </div>
                                  </div>

                </article>


</section>
     
        <section class="comments">
            <div class="container">
                <div class="title-section">
                    <h2>#Top Stories</h2>
                    <h3>Avis de nos voyageurs</h3>
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

        <section class="departure container">

                <div class="title-section">
                        <h2>En route vers l'aventure</h2>
                        <h3>Départs</h3>
                    </div>

                <table class="table table-striped text-center">
                        <thead>
                          <tr class="bg-primary text-light">
                            <th scope="col">Date de départ</th>
                            <th scope="col">Prix</th>
                            <th scope="col">Réserver</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">10/09</th>
                            <td>1750 €</td>
                            <td><button type="button" class="btn bg-primary">Réserver</button></td>
                           
                          </tr>
                          <tr>
                            <th scope="row">10/01</th>
                            <td>1990 €</td>
                            <td><button type="button" class="btn bg-primary">Réserver</button></td>
                           
                          </tr>
                          <tr>
                            <th scope="row">24/04</th>
                            <td>2650 €</td>
                            <td><button type="button" class="btn bg-primary">Réserver</button></td>
                            
                          </tr>
                        </tbody>
                      </table>




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