<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width" , initial-scale="1.0">
    <title>Habitat</title>
    <link rel="stylesheet" href="habitat.css">
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
        <!--Habitat-->
        <sections class="habitat_JSM">
            <aside class="noshabitat">
                <h1 class="hbtitle">NOS HABITATS</h1>
                <div class="JMS">
                    <div class="J">
                        <h2>JUNGLE</h2>
                        <a href="jungle.html"><img src="Jungle.jpg" alt="image d'une jungle" width="450"
                                height="500"></a>
                    </div>
                    <div class="M">
                        <h2>MARAIS</h2>
                        <a href="marais.html"><img src="Marais.jpg" alt="image d'un marais" width="500"
                                height="500"></a>
                    </div>
                    <div class="S">
                        <h2>SAVANE</h2>
                        <a href="savane.html"><img src="Savane.jpg" alt="image d'une savane" width="375"
                                height="500"></a>
                    </div>
                </div>
            </aside>
            </section>
            <p class="Dégradation">Toute dégradation sur une infrastructure du zoo sera a votre charge.</p>


            <!--Avis-->
            <section class="avis">
                <form action="" method="POST">
                    <fieldset>
                        <p class="C">Votre commentaire sera supprimé s'il ne respecte pas le règlement.</p>

                        <legend>Partager votre avis</legend>

                        <div>
                            <label for="pseudo">Pseudo :</label>
                            <input id="pseudo" type="pseudo" placeholder="pseudo" required>
                        </div><br />

                        <div>
                            <label for="commentaire">Votre commentaire :</label>
                            <textarea name="commentaire" id="commentaire" cols="100" rows="10"
                                placeholder="Donner votre avis" required>
                            </textarea>
                        </div><br />
                        <input type="submit" value="Valider votre avis ">
                    </fieldset>
                </form>
            </section>
        </sections>
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