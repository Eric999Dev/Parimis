<?php require_once("header.php");?>
<main>
	<div id="formulaire">
		<h1>Reservation</h1>

		<form method="post" action="">
			<!--<h2>Réservation</h2> -->
			<br><br>
			<div class="resa_s">
				<label for="date">Date d'arrivée: </label>
				<input id="date" type="date" min="2018-02-01">
				<br>
				<label for="date1">Date de depart: </label>
				<input id="date1" type="date" min="2018-02-01"><br>

			</div>

			<div class="resa_s">
				<label for="categorie">Catégorie</label>
				<select id="categorie" name="categorie" required="">
					<optgroup label="Choisissez la catégorie">
						<option value="choix">Chambre</option>
						<option value="choix">Restaurant</option>
						<option value="choix">Spa</option>
						<option value="choix">Evènement</option>
						<option value="choix">Autre</option>
					</optgroup>
				</select>
			</div>

			<div class="resa_s">
				<label class="" for="civilite">Civilité</label>
				<select id="civilite" name="civilite" required="">
					<optgroup label="">
						<option value="choix">Mr</option>
						<option value="choix">Mme</option>
					</optgroup>
				</select>
			</div>

			<div class="resa_s">
				<label class="" for="nom">Nom</label>
				<input id="nom" name="nom" type="text" required="" placeholder="Votre nom ici..." />
				<br>

				<label class="" for="prenom">Prénom</label>
				<input id="prenom" name="prenom" type="text" required="" placeholder="Votre prénom ici..." />
			</div><br>


			<label for="entreprise">Entreprise</label>
			<input id="entreprise" name="entreprise" type="text" placeholder="Votre nom ici..." />
			<!--

-->
			<label for="email">Adresse e-mail</label>
			<input type="email" name="email" id="email" required="" placeholder="Votre adresse e-mail ici..." />

			<label for="email_confirm">Confirmer l'adresse e-mail</label>
			<input type="email" name="email_confirm" id="email_confirm" required="" placeholder="Votre adresse e-mail..." />
			<br>
			<!--                                </div>		-->

			<div class="resa_s">
				<label for="cp">Code postal</label>
				<input type="text" id="cp" name="cp" pattern="[0-9]{5}" maxlength="5" title="5 chiffres requis entre 0 et 9">
				<br>
				<label for="ville">Ville</label>
				<input type="text" id="ville" name="ville" list="france"><br>
			</div>

			<!--								<div class="resa_s">-->
			<!--
								<label for="pays">Pays</label>
						          <input type="text" name="pays" id="pays" required="" placeholder="Votre pays ici..." />
-->
			<!--
                                </div>
                                <div class="resa_s">
-->
			<label for="exampleFormControlInput1">Pays</label>
			<select id="inputState" class="form-control">
				<option selected>Selectionner votre pays</option>
				<option>France</option>
				<option>Espagne</option>
				<option>Etats-Unis</option>
				<option>Chine</option>
				<option>Afrique du Sud</option>
			</select>
			<!--
                                </div>
                              <div class="resa_s">
-->
			<label for="message">Message</label>
			<textarea name="message" id="message" required="" placeholder="Ecrivez votre message ici..." rows="6"></textarea>
			<!--
                              </div>

                              <div class="resa_s">
-->
			<input type="submit" id="submit" name="submit" value="Envoyer" />
			<!--						      </div>-->

		</form>
	</div>
</main>
<?php require_once("footer.php");?>
