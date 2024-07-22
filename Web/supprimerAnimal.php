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

if (isset($_GET['animal_id']) and !empty($_GET['animal_id'])) {
    $getid = $_GET['animal_id'];
    $recupAnimal = $DDB->prepare('SELECT * FROM animal WHERE prénom = ? ');
    $recupAnimal->execute(array($getid));
    if ($recupAnimal->rowCount() > 0) {

        $suppanimal = $DDB->prepare('DELETE FROM animal WHERE animal_id = ?');
        $suppanimal->execute(array($getid));

        header('Location: animalMod.php');
    } else {
        echo "Aucun membres n'a été trouvé";
    }
} else {
    echo "L'identifiant n'a pas été récupéré";
}
