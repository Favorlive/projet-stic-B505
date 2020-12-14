<html lang="fr">
<head>
    <meta charset="utf-8"/>
    <title>Gestion des étudiants</title>
    <link rel="stylesheet" type="text/css" href="my.css">
</head>

<body>

<h1>Inscription d'un étudiant</h1>

<?php

$bdd = new PDO('mysql:host=localhost;dbname=student', 'root');

if (isset($_POST['register'])) {

    $lastName = htmlspecialchars($_POST['lastName']);
    $firstName = htmlspecialchars($_POST['firstName']);
    $age = htmlspecialchars($_POST['age']);
    $email = htmlspecialchars($_POST['email']);
    $sex = htmlspecialchars($_POST['sex']);
    $country = htmlspecialchars($_POST['country']);

    if (!empty($lastName) && !empty($firstName) && !empty($age) && !empty($email) && !empty($sex) && !empty($country)) {

        $insertQuery = $bdd->prepare("insert into student(last_name, first_name, age, email, sex, country) values (?, ?, ?, ?, ?, ?)");
        $insertQuery->execute(array($lastName, $firstName, $age, $email, $sex, $country));
        $ok = "Le nouvel étudiant a bien été enregistré";
        echo $ok;
    }
}

?>

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
        <select id="country" name="country">
            <option value="de">Allemagne</option>
            <option value="be">Belgique</option>
            <option value="fr">France</option>
            <option value="gb">Grande-Bretagne</option>
            <option value="nl">Pays-Bas</option>
        </select>
    </p>
    <p>
        <input type="submit" name="register" value="Enregistrer">
        <input type="reset" name="reset" value="Réinitialiser">
    </p>
</form>

</body>
</html>
