<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width" , initial-scale="1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="contact.css">
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

        <section class="contact">
            <h1 class="contact_title">DEMANDE DE CONTACT</h1>
            <p class="DM">Formulez votre demande nos employés vous répondrons dans les plus bref delais .

            </p>

            <form action="" method="POST">
                <div class="ps">
                    <label for="pseudo">Pseudo :</label>
                    <input id="pseudo" type="pseudo" placeholder="Pseudo" required>
                </div><br />

                <div class="em">
                    <label for="mail">E-mail :</label>
                    <input id="mail" type="email" placeholder="mail" required>
                </div><br />

                <div class="ms">
                    <label for="message">Message :</label>
                    <textarea name="message" id="message" placeholder="Votre message" cols="100" rows="3">

                </textarea>
                </div><br />
                <button><input type="submit" value="ENVOYER"></button>
                <img src="Courrier.webp" width="300" height="300">
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
</body>

</html>