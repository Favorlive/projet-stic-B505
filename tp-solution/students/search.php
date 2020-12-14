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

<?php

include 'utils.php';

?>

<h1>Rechercher un étudiant</h1>

<form method="POST" action="">
    <p>
        <label for="lastName">Nom de famille</label>
        <input type="text" id="lastName" name="lastName" placeholder="Nom de famille"
               value="<?php echoPostValueIfSet('lastName'); ?>"/>
    </p>
    <p>
        <label for="firstName">Prénom</label>
        <input type="text" id="firstName" name="firstName" placeholder="Prénom"
               value="<?php echoPostValueIfSet('firstName'); ?>"/>
    </p>
    <p>
        <label for="age">Âge</label>
        <input type="number" id="age" name="age" value="<?php echo $_POST['age'] ?>"/>
    </p>
    <p>
        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="prenom.nom@ulb.be"
               value="<?php echoPostValueIfSet('email'); ?>"/>
    </p>
    <p>
        <label for="sex">Sexe</label>
        <select id="sex" name="sex">
            <option></option>
            <option <?php echoIfSexSelected("m"); ?> value="m">Homme</option>
            <option <?php echoIfSexSelected("f"); ?> value="f">Femme</option>
            <option <?php echoIfSexSelected("x"); ?> value="x">Autre</option>
        </select>
    </p>
    <p>
        <label for="country">Pays</label>
        <select id="country" name="country">
            <option></option>
            <option <?php echoIfCountrySelected("de"); ?> value="de">Allemagne</option>
            <option <?php echoIfCountrySelected("be"); ?> value="be">Belgique</option>
            <option <?php echoIfCountrySelected("fr"); ?> value="fr">France</option>
            <option <?php echoIfCountrySelected("gb"); ?> value="gb">Grande-Bretagne</option>
            <option <?php echoIfCountrySelected("nl"); ?> value="nl">Allemagne</option>
        </select>
    </p>
    <p>
        <input type="submit" name="search" value="Chercher">
    </p>

</form>

<table>
    <tr>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Âge</th>
        <th>Email</th>
        <th>Sexe</th>
        <th>Pays</th>
    </tr>

    <?php

    if (isset($_POST['search'])) {

        $lastName = htmlspecialchars($_POST['lastName']);
        $firstName = htmlspecialchars($_POST['firstName']);
        $age = htmlspecialchars($_POST['age']);
        $email = htmlspecialchars($_POST['email']);
        $sex = htmlspecialchars($_POST['sex']);
        $country = htmlspecialchars($_POST['country']);

        $pdo = new PDO("mysql:host:localhost;dbname = student;charset = utf8", "root");
        $pdo->query("use student");
        $consultQuery = $pdo->prepare("select * from student where "
            . "(:lastName = '' or last_name = :lastName) "
            . " and (:firstName = '' or first_name = :firstName) "
            . " and (:age = '' or age = :age) "
            . " and (:email = '' or email = :email) "
            . " and (:sex = '' or sex = :sex) "
            . " and (:country = '' or country = :country) "
        );

        $consultQuery->execute(array(
            ':lastName' => $lastName,
            ':firstName' => $firstName,
            ':age' => $age,
            ':email' => $email,
            ':sex' => $sex,
            ':country' => $country
        ));

        $results = $consultQuery->fetchAll();

        foreach ($results as $student) {
            echo "<tr>";
            echo "<td>" . $student["last_name"] . "</td>";
            echo "<td>" . $student["first_name"] . "</td>";
            echo "<td>" . $student["age"] . "</td>";
            echo "<td><a href=\"mailto:" . $student["email"] . "\">" . $student["email"] . "</a></td>";
            echo "<td>" . strtoupper($student["sex"]) . "</td>";
            echo "<td>" . strtoupper($student["country"]) . "</td>";
            echo "</tr>";
        }
    }
    ?>

</table>

</body>

</html>
