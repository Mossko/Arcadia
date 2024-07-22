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

    if ($bdd) {
        //echo "Connected to the Arcadia database successfully!";
    }
} catch (PDOException $e) {
    die($e->getMessage());
} finally {
    if ($bdd) {
        $bdd = NULL;
    }
}

if (!$_SESSION['mdp']) {
    header('Location: connexion4.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modification Animal</title>
</head>

<body>
    <?php
    $recupanimal = $DDB->query('SELECT * FROM animal');
    while ($animal = $recupanimal->fetch()) {
    ?>
        <div class="animal">
            <h1><?= $animal['prénom']; ?></h1>
            <a href="modifAnimal.php?animal_id=<?= $animal['animal_id']; ?>">
                <button>Modifier l'animal</button></a>
            <a href="supprimerAnimal.php?animal_id=<?= $animal['animal_id']; ?>">
                <button>Supprimer l'animal</button></a>
        </div>
        <br>
    <?php
    }
    ?>

    <?php
    $recupanimal = $DDB->query('SELECT * FROM animal'); {
    ?>
        <div>
            <a href="ajouterAnimal.php">
                <button>Nouveaux animaux</button></a>
        </div>
    <?php
    }
    ?>

</body>