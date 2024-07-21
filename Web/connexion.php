<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width" , initial-scale="1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="connexion.css">
</head>

<body>
    <header>
        <!-- Logo -->
        <a class="logo1" href="logo">
            <img src="arcadia.png" alt="Logo de ma page" width="100" height="100">
        </a>
        <!-- Navigation -->
        <nav class="navigation">
            <ul>
                <li><a href="homepage.php">Accueil</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="habitat.php">Nos Habitat</a></li>
                <li><a href="connexion.php">Connexion</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
        <!-- Fin de la navigation -->
    </header>
    <main>

        <!--Contact-->

        <section class="connexion">
            <h1 class="connexion_title">Connexion</h1>
            <p class="CN">Cette espace est réservé a notre personnel .

            </p>

            <form action="" method="POST">

                <div class="em">
                </div><br />
                <div class="ms">

                    <input type="text" name="pseudo" autocomplete="off">
                    <br>
                    <input type="password" name="mdp">
                    <br><br>
                    <input type="submit" name="valider">

                </div><br />
                <?php require 'Espace admin/connexion.php'; ?>
                <?php require 'Espace Employés/connexion3.php'; ?>
                <?php require 'Espace veterinaire/connexion2.php'; ?>

            </form>


        </section>

    </main>

    <input type="submit" value="Se connecter">
    <footer>
        <!--Horaires-->
        <section class="horaires">
            <table>
                <tr>
                    <th></th>
                    <th>Horaires</th>
                </tr>
                <tr>
                    <th>Lundi</th>
                    <td>10h - 18h</td>
                </tr>

                <tr>
                    <th>Mardi</th>
                    <td>10h - 20h</td>
                </tr>

                <tr>
                    <th>Mercredi</th>
                    <td>10h - 20h</td>
                </tr>

                <tr>
                    <th>Jeudi</th>
                    <td>10h - 18h</td>
                </tr>
                <tr>
                    <th>Vendredi</th>
                    <td>10h - 18h</td>
                </tr>
            </table>
        </section>

        <p class="droit">&copy; 2023 Tous droits réservés STUDI. ARCADIA </p>

    </footer>
</body>

</html>

<!--PHP-->
<?php

$pseudo = $_POST['pseudo'];
?>
<?php



if (!empty($_POST) and $_POST['pseudo']) {
    echo "Votre pseudo est $pseudo";
}


?>