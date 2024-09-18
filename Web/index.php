<!--Sécuriser la page -->
<?php
session_start();
if (!$_SESSION['mdp']) {
    header('Location: connexion4.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Admin</title>
</head>

<body>
    <a href="membres.php">Afficher tout les membres</a>
    <br>
    <a href="servicesMod.php">Services du parc</a>
    <br>
    <a href="habitatMod.php">Habitat du parc</a>
    <br>
    <a href="animalMod.php">Animaux du parc</a>



</body>

</html>