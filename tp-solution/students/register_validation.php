<html lang="fr">
<head>
    <meta charset="utf-8"/>
    <title>Gestion des étudiants</title>
    <link rel="stylesheet" type="text/css" href="my.css">
</head>

<body>

<nav>
    <a href="register_validation.php">Inscription</a>
    <a href="search.php">Recherche</a>
</nav>

<h1>Inscription d'un étudiant</h1>

<?php

include 'utils.php';

function checkEmail($email)
{
    $regex = "/^[\w\d\_\.]+@\w+(\.\w+)+$/i";
    return preg_match($regex, $email);
}

$bdd = new PDO('mysql:host=localhost;dbname=student', 'root');

if (isset($_POST['register'])) {

    $lastName = htmlspecialchars($_POST['lastName']);
    $firstName = htmlspecialchars($_POST['firstName']);
    $age = htmlspecialchars($_POST['age']);
    $email = htmlspecialchars($_POST['email']);
    $sex = htmlspecialchars($_POST['sex']);
    $country = htmlspecialchars($_POST['country']);

    $ok = '';
    $lastNameError = '';
    $firstNameError = '';
    $ageError = '';
    $emailError = '';

    if (empty($lastName)) {
        $lastNameError = 'Requis';
    } else {
        $lastNameLength = strlen($lastName);
        if ($lastNameLength < 2 || $lastNameLength > 30) {
            $lastNameError = 'Le nom de famille doit contenir entre 2 et 30 caractères';
        }
    }
    if (empty($firstName)) {
        $firstNameError = 'Requis';
    } else {
        $firstNameLength = strlen($firstName);
        if ($firstNameLength < 2 || $firstNameLength > 30) {
            $firstNameError = 'Le prénom doit contenir entre 2 et 30 caractères';
        }
    }
    if (empty($age)) {
        $ageError = 'Requis';
    } else {
        if (intval($age) < 16) {
            $ageError = "L'âge doit être au moins 16";
        }
    }
    if (empty($email)) {
        $emailError = 'Requis';
    } else if (!checkEmail($email)) {
        $emailError = 'Email non valide';
    } else {
        $mailExistsQuery = $bdd->prepare("select * from student where email = ?");
        $mailExistsQuery->execute(array($email));

        if ($mailExistsQuery->rowCount() > 0) {
            $emailError = 'Cet e-mail existe déjà';
        }
    }

    if (empty($lastNameError) && empty($firstNameError) && empty($ageError) && empty($emailError)) {
        $insertQuery = $bdd->prepare("insert into student(last_name, first_name, age, email, sex, country) values (?, ?, ?, ?, ?, ?)");
        $insertQuery->execute(array($lastName, $firstName, $age, $email, $sex, $country));
        $ok = "Le nouvel étudiant a bien été enregistré";
    }
}

?>

<form method="POST" action="">
    <p>
        <label for="lastName">Nom de famille</label>
        <input type="text" id="lastName" name="lastName" placeholder="Nom de famille"
               value="<?php echoPostValueIfSet('lastName'); ?>"/>
        <?php
        if (!empty($lastNameError)) {
            echo "<span style=\"color: red;\">" . $lastNameError . "</span>";
        }
        ?>
    </p>
    <p>
        <label for="firstName">Prénom</label>
        <input type="text" id="firstName" name="firstName" placeholder="Prénom"
               value="<?php echoPostValueIfSet('firstName'); ?>"/>
        <?php
        if (!empty($firstNameError)) {
            echo "<span style=\"color: red;\">" . $firstNameError . "</span>";
        }
        ?>
    </p>
    <p>
        <label for="age">Âge</label>
        <input type="number" id="age" name="age" value="<?php echo $_POST['age'] ?>"/>
        <?php
        if (!empty($ageError)) {
            echo "<span style=\"color: red;\">" . $ageError . "</span>";
        }
        ?>
    </p>
    <p>
        <label for="email">Email</label>
        <input type="text" id="email" name="email" placeholder="prenom.nom@ulb.be"
               value="<?php echoPostValueIfSet('email'); ?>"/>
        <?php
        if (!empty($emailError)) {
            echo "<span style=\"color: red;\">" . $emailError . "</span>";
        }
        ?>
    </p>
    <p>
        <label for="sex">Sexe</label>
        <select id="sex" name="sex">
            <option <?php echoIfSexSelected("m"); ?> value="m">Homme</option>
            <option <?php echoIfSexSelected("f"); ?> value="f">Femme</option>
            <option <?php echoIfSexSelected("x"); ?> value="x">Autre</option>
        </select>
    </p>
    <p>
        <label for="country">Pays</label>
        <select id="country" name="country">
            <option <?php echoIfCountrySelected("de"); ?> value="de">Allemagne</option>
            <option <?php echoIfCountrySelected("be"); ?> value="be">Belgique</option>
            <option <?php echoIfCountrySelected("fr"); ?> value="fr">France</option>
            <option <?php echoIfCountrySelected("gb"); ?> value="gb">Grande-Bretagne</option>
            <option <?php echoIfCountrySelected("nl"); ?> value="nl">Allemagne</option>
        </select>
    </p>
    <p>
        <input type="submit" name="register" value="Enregistrer">
        <input type="reset" name="reset" value="Réinitialiser">
    </p>
</form>

<?php
if (!empty($ok)) {
    echo $ok;
}
?>

</body>
</html>
