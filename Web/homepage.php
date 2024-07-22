<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width" , initial-scale="1.0">
    <title>Accueil</title>
    <link rel="stylesheet" href="homepage.css">
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

        <!--Présentation du zoo -->

        <section class="présentation">
            <aside class="présentation-title">
                <H1>Arcadia</H1>
                <p>Parc animalier écologique situé en France près de la fôret de brocéliande ,
                    nous possédons un panel d'animaux réparti par habitat , leur bien-être étant une
                    priorité absolue plusieurs vétérinaires leur rendent visite chaque jour , nous mettons aussi en
                    place
                    une alimentation calculé pour chaque animal en fonction de son état et de ces besoin , ce parc
                    fait
                    notre
                    fierté ainsi que la vôtre .
                </p>
            </aside>
        </section>


        <!--Présentaion des Habitat-->

        <section class="Habitat">
            <aside class="Habitat_Présentation">
                <H1 class="Habitat_title">Habitat</H1>
                <p>Nous allons vous présenter les différents habitat présent dans notre zoo , bien évidemment nous
                    fesons en
                    sorte
                    que les habitat présente les mêmes caractéristique que la vie en dehors du zoo pour le bien-être des
                    animaux,
                    vous le verrez on les voyant qu'ils sont extrèmement joyeux .
                </p>
            </aside>

            <aside class="Dif habitat">
                <img src="" alt="">
                <div class="Habitat SJM">
                    <div class="Habitat_Savanne">
                        <div>
                            <H2>Habitat Savane</H2>
                            <p>La star inconstestée de notre savane est notre éléphant que nous avons surnomée Babar
                                ,très
                                apprécié des enfants et des adultes , d'autre animaux sont a découvrir mais voici notre
                                tête d'affiche .
                            </p>
                        </div>
                    </div>
                    <div class="Habitat_Jungle">
                        <div>
                            <H2>Habitat Jungle</H2>
                            <p>La star inconstestée de notre Jungle est notre orangs-outans que nous avons surnomée
                                Akagami,très
                                apprécié des adolescent , d'autre animaux sont encore a découvrir mais voici la star et
                                le roi de notre jungle .
                            </p>
                        </div>
                    </div>
                    <div class="Habitat_Marais">
                        <div>
                            <H2>Habitat Marais</H2>
                            <p>Les stars de nos Marais sont nos crocodile , 1 crocodile sort du lot en particulier nous
                                l'avons surnomée Lacoste
                                ,très
                                apprécié des enfants et des adultes , d'autre animaux sont a découvrir mais voici nos
                                vedettes .
                            </p>
                        </div>
                    </div>
                </div>
            </aside>
        </section>

        <!--Services-->

        <section class="Services">
            <aside class="Services_Présentation">
                <h1 class="services_title">Services</H1>
                <p>Plusieurs services sont mises a votre disposition pour une immersion totale et pour rendre votre
                    journée et votre exploration agréable a vivre .
                </p>
            </aside>

            <aside>
                <img src="" alt="">
                <div class="Services RTV">
                    <div class="Restaurant">
                        <div>
                            <H2>Restaurant</H2>
                            <p>Des restaurants ainsi que des stand a votre disposition aux quatres coin du zoo , un plan
                                vous sera fourni pour vous guidez .
                            </p>
                        </div>
                    </div>
                    <div class="Activité">
                        <div>
                            <H2>Activité pour vos enfants et pour les adultes </H2>
                            <p>Accompagné par nos équipes , participez aux soins des animaux (nourrissages, nettoyages
                                des espaces, créations d’enrichissements…).
                            </p>
                        </div>
                    </div>
                    <div class="Visite">
                        <div>
                            <H2>Visite guidée</H2>
                            <p>Accompagné par nos équipes découvrez nos visite guidée très enrichissante.
                            </p>
                        </div>
                    </div>
                </div>
            </aside>
        </section>

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
                        <textarea name="commentaire" id="commentaire" placeholder="Donner votre avis" cols="100"
                            rows="15" required>

                    </textarea>
                    </div><br />
                    <input type="submit" value="Valider votre avis ">
                </fieldset>
            </form>
        </section>
    </main>


    <Footer>

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

    </Footer>

</body>

</html>