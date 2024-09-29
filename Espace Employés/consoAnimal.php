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
    <title>Consommation animal</title>
    <link rel="stylesheet" href="connexion3.css">
</head>

<body>
    <?php
    $recupconso = $DDB->query('SELECT * FROM consommation');
    while ($consommation = $recupconso->fetch()) {
    ?>
        <div class="consommation">
            <h1><?= $consommation['names']; ?></h1>
            <a href="modifconso.php?names=<?= $consommation['names']; ?>">
                <button>Modifier la Consommation animal</button></a>

        </div>
        <br>
    <?php
    }
    ?>
</body>

</html>