<html lang="fr">
<head>
    <meta charset="utf-8"/>
    <title>Gestion des étudiants</title>
    <link rel="stylesheet" type="text/css" href="my.css">
</head>

<body>

<h1>Etudiants</h1>

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

    $pdo = new PDO("mysql:host:localhost;dbname=student;charset=utf8", "root");
    $pdo->query("use student");
    $consultQuery = $pdo->query("select * from student");
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

    ?>

</table>

</body>

</html>
