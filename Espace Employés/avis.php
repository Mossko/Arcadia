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
    header('Location: connexion3.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Afficher tout les avis</title>
</head>

<body>
    <?php
    $recupAvis = $DDB->query('SELECT * FROM avis');
    while ($avis = $recupAvis->fetch()) {
    ?>
        <div class="avis">
            <h1><?= $avis['comentaire']; ?></h1>
            <a href="supprimerAvis.php?avis_id=<?= $avis['avis_id']; ?>">
                <button>Supprimer l'article</button></a>

        </div>
        <br>
    <?php
    }
    ?>
</body>

</html>