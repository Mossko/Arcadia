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
    <title>Modification service</title>
</head>

<body>
    <?php
    $recupservice = $DDB->query('SELECT * FROM service');
    while ($service = $recupservice->fetch()) {
    ?>
        <div class="nom">
            <h1><?= $service['service_id']; ?></h1>
            <a href="modifService.php?service_id=<?= $service['service_id']; ?>">
                <button>Modifier la Consommation animal</button></a>

        </div>
        <br>
    <?php
    }
    ?>
</body>

</html>