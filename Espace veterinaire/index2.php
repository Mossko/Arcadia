<!--Sécuriser la page -->
<?php
session_start();
if (!$_SESSION['mdp']) {
    header('Location: connexion2.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>
    <a href="consultation.php">Vos consulations</a>
    <br>
    <a href="rapport.php">Vos rapport sur la conso animal</a>

</body>

</html>