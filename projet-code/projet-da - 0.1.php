<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Projet - Déclarer un camp </title>
		<link rel="stylesheet" href="da-style-centralized.css">
	</head>
	<body>

<!-- *** -->
<!-- DA -->
<!-- *** -->

		<h1> Déclaration d'activité </h1>


<!-- PO -->

		<h2> Identification du Pouvoir organisateur </h2>
		<form action="/my-handling-form-page" method="POST">
			<p>
				<label for="youth_federation_movement">Fédération:</label>
				<select id="youth_federation" name="youth_federation">
					<option value="S">      Les Scouts</option>
					<option value="GCB">    Les Guides de Belgique</option>
					<option value="SGP">    Les Scouts et Guides pluralistes</option>
					<option value="P">      Les Patros</option>
					<option value="FR">     Les Faucons rouges</option>
				</select>
			</p>
			<p>
				<label for="name">Dénomination:</label>
				<input type="text" id="name" name="user_name" placeholder="Le nom de votre unité"/>
			</p>
			<p>
				<label for="name">Rue:</label>
				<input type="text" id="street" name="street" />
			</p>
			<p>
				<label for="name">Numéro:</label>
				<input type="text" id="street_number" name="street_number" />
			</p>
			<p>
				<label for="name">Commune:</label>
				<input type="text" id="locality" name="locality" />
			</p>
			<p>
				<label for="name">Code postal:</label>
				<input type="text" id="postal" name="postal" />
			</p>
		</form>

		/* Valeurs de type <display-outside> */


<!-- Contact -->


		<h2> Personne de contact de l'unité (correspondant)</h2>
		<form method="POST" action="">
			<p>
				<label for="lastName">Nom de famille</label>
				<input type="text" id="lastName" name="lastName" placeholder="Nom de famille"/>
			</p>
			<p>
				<label for="firstName">Prénom</label>
				<input type="text" id="firstName" name="firstName" placeholder="Prénom"/>
			</p>
			<p>
			<label for="name">Rue:</label>
				<input type="text" id="street" name="street" />
			</p>
			<p>
				<label for="name">Numéro:</label>
				<input type="text" id="street_number" name="street_number" />
			</p>
			<p>
				<label for="name">Commune:</label>
				<input type="text" id="locality" name="locality" />
			</p>
			<p>
				<label for="name">Code postal:</label>
				<input type="text" id="postal" name="postal" />
			</p>
			<p>
				<label for="street">E-mail:</label>
				<input type="email" id="mail" name="user_mail" />
			</p>
		</form>
		<h2> Compte financier </h2>
		<h2> Camp (centre de vacances) </h2>
		<h2> Lieu du camp (endroit du centre de vacances) </h2>
		<h2> Chef d'animation (encadrement du centre) </h2>
		<h2> Responsable qualifié du centre (coordinateur) </h2>
		<label for="msg">Message:</label>
		<textarea id="msg" name="user_message"></textarea>
	</li>
	<li class="button"><button type="submit">Send your message</button></li>
</ul>
</form>
<h2> Compte financier 
</h2>
<form action="/my-handling-form-page" method="post"><ul>
	<li>
		<label for="name">Dénomination:</label>
		<input type="text" id="name" name="user_name" />
	</li>
	<li>
		<label for="street">E-mail:</label>
		<input type="email" id="mail" name="user_mail" />
	</li>
	<li>
		<label for="msg">Message:</label>
		<textarea id="msg" name="user_message"></textarea>
	</li>
	<li class="button"><button type="submit">Send your message</button></li>
</ul>
</form>
<h2> Estimation nombre d'enfants et d'encadrants  
</h2>
<form action="/my-handling-form-page" method="post"><ul>
	<li>
		<label for="name">Dénomination:</label>
		<input type="text" id="name" name="user_name" />
	</li>
	<li>
		<label for="street">E-mail:</label>
		<input type="email" id="mail" name="user_mail" />
	</li>
	<li>
		<label for="msg">Message:</label>
		<textarea id="msg" name="user_message"></textarea>
	</li>
	<li class="button"><button type="submit">Send your message</button></li>
</ul>



</form>
<h2> Centre de vacances 
</h2>
<form action="/my-handling-form-page" method="post"><ul>
	<li>
		<label for="name">Dénomination:</label>
		<input type="text" id="name" name="user_name" />
	</li>
	<li>
		<label for="street">E-mail:</label>
		<input type="email" id="mail" name="user_mail" />
	</li>
	<li>
		<label for="msg">Message:</label>
		<textarea id="msg" name="user_message"></textarea>
	</li>
	<li class="button"><button type="submit">Send your message</button></li>
</ul>
</form>
<h2> Coordinateur du centre - Responsable qualifié (pour les camps) 
</h2>
<form action="/my-handling-form-page" method="post"><ul>
	<li>
		<label for="name">Dénomination:</label>
		<input type="text" id="name" name="user_name" />
	</li>
	<li>
		<label for="street">E-mail:</label>
		<input type="email" id="mail" name="user_mail" />
	</li>
	<li>
		<label for="msg">Message:</label>
		<textarea id="msg" name="user_message"></textarea>
	</li>
	<li class="button"><button type="submit">Send your message</button></li>
</ul>
</form>
<h1>Inscription d'un étudiant
</h1>
<form method="POST" action=""><p>
	<label for="lastName">Nom de famille</label>
	<input  type="text"                 id="lastName"                 name="lastName"                 placeholder="Nom de famille"/>
</p>
<p>
	<label for="firstName">Prénom</label>
	<input type="text" id="firstName" name="firstName" placeholder="Prénom"/>
</p>
<p>
	<label for="age">Âge</label>
	<input type="number" id="age" name="age"/>
</p>
<p>
	<label for="email">Email</label>
	<input type="text" id="email" name="email" placeholder="prenom.nom@ulb.be"/>
</p>
<p>
	<label for="sex">Sexe</label>
	<select id="sex" name="sex">
		<option value="m">Homme</option>
		<option value="f">Femme</option>
		<option value="x">Autre</option>
	</select>
</p>
<p>
	<label for="country">Pays</label>
</p>
<p>
	<input type="submit" name="register" value="Enregistrer">
	<input type="reset" name="reset" value="Réinitialiser">
</p>
</form>
</body>
</html>

