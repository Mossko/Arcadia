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
    <title>Modification Habitat</title>
</head>

<body>
    <?php
    $recuphabitat = $DDB->query('SELECT * FROM habitat');
    while ($habitat = $recuphabitat->fetch()) {
    ?>
        <div class="habitat">
            <h1><?= $habitat['nom']; ?></h1>
            <a href="modifHabitat.php?habitat_id=<?= $habitat['habitat_id']; ?>">
                <button>Modifier les habitat</button></a>

        </div>
        <br>
    <?php
    }
    ?>
</body>

</html>