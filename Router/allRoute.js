import Route from "./Route.js";

//Définir ici vos routes
export const allRoutes = [
    new Route("/", "Accueil", "/Web/homepage.php"),

    new Route("/ajoutAnimal", "Ajouter un Animal", "/Web/ajouterAnimal.php"),
    new Route("/nouveaux Animaux", "Accès Animaux", "/Web/animalMod.php"),
    new Route("/modificationAnimal", "Modification animal", "/Web/modifAnimal.php"),
    new Route("/supprimerAnimal", "Supprimer vos animaux", "/Web/supprimerAnimal.php"),

    new Route("/habitat", "Habitat", "/Web/habitat.php"),
    new Route("/habitat A", "Accès Habitat", "/Web/habitatMod.php"),
    new Route("/modificationHabitat", "Modification des habitat", "/Web/modifHabitat.php"),

    new Route("/connexion", "Page de connexion", "/Web/connexion.php"),
    new Route("/connexion A", "Page de connexion Admin", "/Web/connexion4.php"),
    new Route("/deconnexion", "Page de deconnexion Admin", "/Web/deconexion.php"),

    new Route("/contact", "Page de contact", "/Web/contact.php", "/js/champs.js"),

    new Route("/MenuAdmin", "Menu admin", "/Web/index.php"),

    new Route("/Membres", "Employés du zoo", "/Web/membres.php"),
    new Route("/supprimerMembres", "Virer vos employés", "/Web/supprimer.php"),

    new Route("/services", "Services", "/Web/services.php"),
    new Route("/nouveauService", "services", "/Web/servicesMod.php"),
    new Route("/modificationService", "Modification des Services", "/Web/modifService.php"),

];

//Le titre s'affiche comme ceci : Route.titre - websitename
export const websiteName = "Arcadia";