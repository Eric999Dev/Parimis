<?php require_once("header.php");?>
<!-- Contenu page recrutement (debut) -->
<main>
	<div id="formulaire">

		<h1>Recrutement</h1>
		<form method="post" action="#">
			<label for="civilite">Civilité</label>
			<select id="civilite" name="civilite">

				<option value="choix">Mr</option>
				<option value="choix">Mme</option>

			</select>

			<div class="formu_s">
				<label for="nom">Nom</label>
				<input id="nom" name="nom" type="text" placeholder="Votre nom ici..." />
			</div> <br>

			<div class="formu_s">
				<label for="prenom">Prénom</label>
				<input id="prenom" name="prenom" type="text" placeholder="Votre prénom ici..." />
			</div><br>

			<div class="formu_s">
				<label for="email">Adresse e-mail</label>
				<input type="email" name="email" id="email" placeholder="Votre adresse e-mail ici..." />
			</div><br>

			<div class="formu_s">
				<label for="email_confirm">Confirmer l'adresse e-mail</label>
				<input type="email" name="email_confirm" id="email_confirm" placeholder="Votre adresse e-mail..." />
			</div>

			<div class="formu_s">
				<label for="pays">Pays</label>
				<select id="pays" class="form-control">
					<option selected>Selectionner votre pays</option>
					<option>France</option>
					<option>Espagne</option>
					<option>Etats-Unis</option>
					<option>Chine</option>
					<option>Afrique du Sud</option>
				</select>
			</div>

			<div class="formu_s">
				<label for="categories">Categories</label>
				<select id="categories" class="form-control">
					<option selected>Selectionner votre categorie</option>
					<option>Chambres</option>
					<option>Spa</option>
					<option>Restaurant</option>
					<option>Ordre general</option>
				</select>
			</div>

			<div class="formu_s">
				<label for="message">Lettre de Motivation</label>
				<textarea name="message" id="message" placeholder="Ecrivez votre lettre de motivation ici..."></textarea>
			</div>

			<div class="formu_s">
				<label for="telecharger_votre_cv">Télécharger votre CV</label>
				<input type="file" id="telecharger_votre_cv" />
			</div> <br>

			<div class="formu_s">
				<label for="telecharger_lettre_de_motivation">Télécharger lettre de motivation</label>
				<input type="file" id="telecharger_lettre_de_motivation" />
			</div> <br>

			<div class="formu_s">
				<input type="submit" id="submit" name="submit" value="Envoyer" />
			</div>

		</form>
	</div>
</main>
<!-- Contenu page Recrutement (fin) -->
<?php require_once("footer.php");?>
