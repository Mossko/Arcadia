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

if (isset($_GET['id']) and !empty($_GET['id'])) {
    $getid = $_GET['id'];
    $recupUser = $DDB->prepare('SELECT * FROM users WHERE username_id = ? ');
    $recupUser->execute(array($getid));
    if ($recupUser->rowCount() > 0) {

        $bannirUser = $DDB->prepare('DELETE FROM users WHERE username_id=?');
        $bannirUser->execute(array($getid));

        header('Location: membres.php');
    } else {
        echo "Aucun membres n'a été trouvé";
    }
} else {
    echo "L'identifiant n'a pas été récupéré";
}
