<?php require_once("../header.php");?>
<!-- Contenu page contact (debut) -->
<main>
    <div id="formulaire">
        <h1>Contact</h1>
        <form method="post" action="#">
            <label for="nom">Nom</label>
            <input type="text" class="form-control" id="nom">

            <label for="prenom">Prénom</label>
            <input type="text" class="form-control" id="prenom">

            <label for="entreprise">Entreprise</label>
            <input type="text" class="form-control" id="entreprise">

            <label for="adresse_mail">Adresse mail</label>
            <input type="email" class="form-control" id="adresse_mail" placeholder="nom@example.com">

            <label for="pays">Pays</label>
            <select id="pays" class="form-control">
                <option selected>Selectionner votre pays</option>
                <option>France</option>
                <option>Espagne</option>
                <option>Etats-Unis</option>
                <option>Chine</option>
                <option>Afrique du Sud</option>
            </select>

            <label for="categories">Categories</label>
            <select id="categories" class="form-control">
                <option selected>Selectionner votre categorie</option>
                <option>Chambres</option>
                <option>Spa</option>
                <option>Restaurant</option>
                <option>Ordre general</option>
            </select>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            <button type="submit" class="btn">Envoyer</button>
        </form>
    </div>

</main>
<!-- Contenu page contact (fin) -->
<?php require_once("../footer.php");?>
