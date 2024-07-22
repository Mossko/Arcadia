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
    <title>Membres</title>
    <link rel="stylesheet" href="connexion.css">
</head>

<body>
    <?php
    $recupUsers = $DDB->query('SELECT * FROM users');
    while ($user = $recupUsers->fetch()) {
    ?>
        <p><?= $user['nom']; ?> <a class="virer" href="supprimer.php?id=<?= $user['username_id']; ?>">Virer ce membre</a></p>
    <?php
    }
    ?>

</body>

</html>