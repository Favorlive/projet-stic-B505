<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Your first HTML form, styled</title>
		<link rel="stylesheet" href="da-style-centralized.css">

	</head>

	<body>
        <h1> Déclaration d'activité </h1>
        <h2> Identification du Pouvoir organisateur </h2>




		<form action="/my-handling-form-page" method="post">
			<ul>
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
				<li class="button">
					<button type="submit">Send your message</button>
				</li>
			</ul>
		</form>
	</body>
</html>
