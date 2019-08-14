<?php require_once("../header.php");?>

<!-- Contenu page avis (debut) -->
<main>
    <div class="prez-avis">

        <h2> Tous les avis et temoignages</h2>

        <form method="post" action="#">
            <label for="nom">Nom</label>
            <input type="text" id="nom" name="nom" placeholder="Votre nom"><br>

            <label for="prenom">Prénom</label>
            <input type="text" id="prenom" name="prenom" placeholder="Votre prénom"><br>

            <h3>Catégories</h3><br>
            <div class="option">
                Hotel<input type="checkbox" name="categories" value="hotel" checked>
                Chambres<input type="checkbox" name="categories" value="chambres">
                Restaurant<input type="checkbox" name="categories" value="restaurant">
                Spa<input type="checkbox" name="categories" value="spa">
            </div>

            <br>

            <label for="adresse">Votre avis :</label><br>
            <textarea id="adresse" name="message" placeholder="Ecrivez votre message ici..." rows="5" cols="25" style="resize: none;"></textarea><br><br>

        </form>

        <br> <br> <input type="submit" value="Valider">

    </div>

    <div class="temoignage ">
        <div class="avatar">

            <img src="../imgs/actualites/avatar-h.jpg" alt="avatar-homme"> <br>
            <p style="margin-left: -13%;">
                Sexe : Homme <br>
                Note : 4/5 <br>
                Situation : Célibataire<br>
            </p>


        </div>
        <div class="message">
            <p> "Un ravissement pour les papilles

                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed rhoncus tincidunt eros, auctor imperdiet nisl feugiat in. Morbi ultrices interdum augue. Sed placerat lorem ut dictum consectetur. Integer gravida ipsum ac urna blandit, dapibus ornare ligula tempus. Suspendisse luctus mollis suscipit."


                Valérie</p>
        </div>
    </div>

    <div class="temoignage">
        <div class="avatar">
            <img src="../imgs/actualites/avatar-f.jpg" alt="avatar-homme"> <br>
            <p style="margin-left: -13%;">
                Sexe : Femme <br>
                Note : 4.5/5 <br>
                Situation : Mariée <br>
            </p>

        </div>
        <div class="message">
            <p> " Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum, voluptatibus, doloribus! Cumque debitis minima provident animi numquam aspernatur, dolorum quae totam at assumenda ut dicta, maxime consectetur quia, illum eveniet." </p>
        </div>
    </div>

    <div class="temoignage">
        <div class="avatar">
            <img src="../imgs/actualites/avatar-h.jpg" alt="avatar-homme"> <br>
            <p style="margin-left: -13%;">
                Sexe : Homme <br>
                Note : 4.5/5 <br>
                Situation : Mariée <br>
            </p>

        </div>
        <div class="message">
            <p> "Un ravissement pour les papilles

                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed rhoncus tincidunt eros, auctor imperdiet nisl feugiat in. Morbi ultrices interdum augue. Sed placerat lorem ut dictum consectetur. Integer gravida ipsum ac urna blandit, dapibus ornare ligula tempus. Suspendisse luctus mollis suscipit."
            </p>
        </div>
    </div>
    <div class="temoignage">
        <div class="avatar">

            <img src="../imgs/actualites/avatar-f.jpg" alt="avatar-femme"> <br>
            <p style="margin-left: -13%;">
                Sexe : Femme <br>
                Note : 3.5/5 <br>
                Situation : Célibataire <br>
            </p>
        </div>
        <div class="message">
            <p> Un spa du tonnerre

                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed rhoncus tincidunt eros, auctor imperdiet nisl feugiat in. Morbi ultrices interdum augue. Sed placerat lorem ut dictum consectetur. Integer gravida ipsum ac urna blandit, dapibus ornare ligula tempus. Suspendisse luctus mollis suscipit.


                Valérie</p>
        </div>
    </div>

    <div class="temoignage">
        <div class="avatar">
            <img src="../imgs/actualites/avatar-h.jpg" alt="avatar-homme"> <br>
            <p style="margin-left: -13%;">
                Sexe : Homme <br>
                Note : 4/5 <br>
                Situation : Mariée <br>
            </p>
        </div>
        <div class="message">
            <p>
                Somptueux ! Tr&egrave;s bel h&ocirc;tel particulier. Personnel aux petits soins. Tea time. Caf&eacute; gourmand. Just perfect ! Et d'un tr&egrave;s bon rapport qualit&eacute; prix. La d&eacute;coration pour Noel &eacute;tait eblouissante. Tr&egrave;s bon moment. Chocolat chaud superbe servi dans des chocolati&egrave;re en argent. Magnifique pr&eacute;sentation de l'h&ocirc;tel Parimis.
                <span class="auteur"></span>
            </p>
        </div>
    </div>

</main>
<!-- Contenu page spa (fin) -->
<?php require_once("../footer.php");?>
