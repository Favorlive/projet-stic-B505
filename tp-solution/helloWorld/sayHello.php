<html lang="fr">
<head>
    <meta charset="utf-8"/>
    <title>Hello World!</title>
    <link rel="stylesheet" type="text/css" href="my.css">
</head>

<body>

<?php
if (isset($_POST['sayHello'])) {
    $name = htmlspecialchars($_POST['name']);
}
?>

<form method="POST" action="">
    <input type="text" id="name" name="name" placeholder="Name"/>
    <input type="submit" name="sayHello" value="Say hello">
</form>

<?php
if (isset($name)) {
    echo '<p id="hello">Hello ' . $name . ' !</p>';
}
?>

</body>
</html>
