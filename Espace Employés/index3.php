<!--Sécuriser la page -->
<?php
session_start();
if (!$_SESSION['mdp']) {
    header('Location: connexion3.php');
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
    <!--<a href="supprimerAvis.php">Commentaire sur les habitats donner votre avis</a>-->
    <br>
    <a href="avis.php">Afficher les avis</a>
    <br>
    <a href="publieravis.php">Publier un avis</a>
    <br>
    <a href="servicesMod.php">Modifier services</a>
    <br>
    <a href="consoAnimal.php">Consommation de l'animal</a>
</body>

</html>