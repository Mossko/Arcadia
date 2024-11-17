<!--Sécuriser la page -->
<?php
session_start();
$dsn = 'localhost';
$user = 'postgres';
$password = 'Foulematou.95';
try {
    $dsn = "pgsql:host=localhost;port=5432;dbname=Arcadia;";
    // make a database connection
    $DDB = $bdd = new PDO($dsn, $user, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
} catch (PDOException $e) {
    die($e->getMessage());
} finally {
    if ($bdd) {
        $bdd = NULL;
    }
}

if (isset($_POST['valider'])) {
    if (!empty($_POST['pseudo']) and !empty($_POST['mdp'])) {
        $pseudo = htmlspecialchars($_POST['pseudo']);
        $mdp  = htmlspecialchars($_POST['mdp']);

        $recupUser = $DDB->prepare('SELECT*FROM "Utilisateur" where "pseudo" = ? AND "mdp" = ? ');
        $recupUser->execute(array($pseudo, $mdp));

        if ($recupUser->rowCount() > 0) {
            $_SESSION['pseudo'] = $pseudo;
            $_SESSION['mdp'] = $mdp;
        } else {
        }
    } else {
        echo "Veuillez complétez tout les champs ...";
    }
    header('Location: connexion4.php');
}


?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width" , initial-scale="1.0">
    <meta http-equiv="" content="0;url=connexion2.php">
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
                <li><a href="contact.html">Contact</a></li>
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
                    <h4>PSEUDO : </h4>
                    <input type="text" name="pseudo" autocomplete="off">
                    </br>
                    <h4>MDP : </h4>
                    <input type="password" name="mdp">
                    </br><br>
                    <input type="submit" name="valider" value="Se connecter">
                </div><br />
            </form>


        </section>

    </main>

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

    <script type="module" src="Router/Router.js"></script>
</body>

</html>