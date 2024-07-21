<?php
session_start();
if (isset($_POST['valider'])) {
    if (!empty($_POST['pseudo']) and !empty($_POST['mdp'])) {
        $pseudo_par_defaut = "admin1";
        $mdp_par_defaut = "admin2002";

        $pseudo_saisi = htmlspecialchars($_POST['pseudo']);
        $mdp_saisi = htmlspecialchars($_POST['mdp']);

        if ($pseudo_saisi == $pseudo_par_defaut and $mdp_saisi == $mdp_par_defaut) {
            $_SESSION['mdp'] = $mdp_saisi;
            header('location: index.php');
        } else {
            echo "Votre mot de passe ou pseudo et incorrect";
        }
    } else {
        echo "Veuillez compléter tout les champs ... ";
    }
}

if (isset($_POST['valider'])) {
    if (!empty($_POST['pseudo']) and !empty($_POST['mdp'])) {
        $pseudo_par_defaut = "admin2";
        $mdp_par_defaut = "adminjosé";

        $pseudo_saisi = htmlspecialchars($_POST['pseudo']);
        $mdp_saisi = htmlspecialchars($_POST['mdp']);

        if ($pseudo_saisi == $pseudo_par_defaut and $mdp_saisi == $mdp_par_defaut) {
            $_SESSION['mdp'] = $mdp_saisi;
            header('location: index.php');
        } else {
            echo "Votre mot de passe ou pseudo et incorrect";
        }
    } else {
        echo "Veuillez compléter tout les champs ... ";
    }
}


?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espace admin-connexion</title>
    <link rel="stylesheet" href="connexion.css">

</head>

<body>
    <form method="POST" action="">
        <input type="text" name="pseudo" autocomplete="off">
        <br>
        <input type="password" name="mdp">
        <br><br>
        <input type="submit" name="valider">
    </form>
</body>

</html>