<?php require_once("header.php");?>
<!-- Contenu page Chambres (debut) -->
<main id="bedroom">
    <h1> Chambre suite</h1>
    <div class="prez-chambre">
        <div class="description">

            <h2> Prestations des chambres :</h2> <br>
            <ul>
                <li>Minibar avec boissons sans alcool offertes</li>
                <li>Plateau de courtoisie</li>
                <li>Room service 24h/24</li>
                <li>Kitchenette équipée</li>
                <li>Wifi offert</li>
                <li>Télévision par ADSL, écran LED</li>
                <li>Climatisation et chauffage individuels</li>
                <li>Salle de bain avec douche ou/et baignoire</li>
                <li>Lit bébé disponible sur demande</li>
                <li>Chambres adaptées aux personnes à mobilité réduite</li>
            </ul> <br>
        </div>

        <div class="cout">
            <ul>
                <li>Grand lit « king »</li>
                <li>2 personnes</li>
                <li>42-52 m²</li>
                <li>Jardin/Cour intérieure/living-room</li>
                <li>À partir de EUR 1500</li>
            </ul>
            <button onclick="window.location.href='reservation.php'">Reservez</button>
        </div>
    </div>


    <div class="cc">

        <div class="flexslider">
            <ul class="slides">
                <li data-thumb="imgs/chambres/suite/slide/1.jpg">
                    <img src="imgs/chambres/suite/slide/1.jpg" alt="chambre suite" />
                </li>
                <li data-thumb="imgs/chambres/suite/slide/2.jpg">
                    <img src="imgs/chambres/suite/slide/2.jpg" alt="sdb suite " />
                </li>
                <li data-thumb="imgs/chambres/suite/slide/3.jpg">
                    <img src="imgs/chambres/suite/slide/3.jpg" alt="salon suite" />
                </li>
                <li data-thumb="imgs/chambres/suite/slide/4.jpg">
                    <img src="imgs/chambres/suite/slide/4.jpg" alt="petit-dej suite" />
                </li>
            </ul>
        </div>

    </div>

    <aside>
        <h2> Autres gammes de chambres Parimis</h2>

        <div class="liens-chambres">
            <div class="link-classique">
                <a href="chambre-classique.php" title="lien vers classique Parimis"><img src="imgs/chambres/classique/vignette.jpg" alt="chambre classique" title="classique parimis"></a>
                <p class="title"> Chambre Classique </p>
            </div>
            <div class="link-confort"><a href="chambre-confort.php" title="lien vers confort Parimis"> <img src="imgs/chambres/confort/vignette.jpg" alt="chambre confort" title="confort parimis"></a>
                <p class="title"> Chambre Confort </p>
            </div>
            <div class="link-deluxe"><a href="chambre-deluxe.php" title="lien vers deluxe Parimis"><img src="imgs/chambres/deluxe/vignette.jpg" alt="chambre deluxe" title="deluxe parimis"></a>
                <p class="title"> Chambre Deluxe </p>
            </div>
        </div>

    </aside>


</main>
<!-- Contenu page Chambre classique (fin) -->
<?php require_once("footer.php");?>
