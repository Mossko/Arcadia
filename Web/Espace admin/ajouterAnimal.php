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
    header('Location: connexion.php');
}

if (isset($_POST['Valider les infos'])) {
    if (!empty($_POST['prénom']) and !empty($_POST['état']) and !empty($_POST['race'])) {
        $prénom = htmlspecialchars($_POST['prénom']);
        $état = htmlspecialchars($_POST['état']);
        $race = htmlspecialchars($_POST['race_id']);

        $insererInfos = $DDB->prepare('INSERT INTO animal (prénom , état , race_id)VALUES(? , ? , ?)');
        $insererInfos->execute(array($prénom, $état, $race));

        echo "Les nouvel infos ont été envoyés ";
        header('Location:aninmalMod.phpp');
    } else {
        echo "veuillez compléter tout les champs";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un nouvel ami</title>
</head>

<body>
    <h1>Un nouvel ami</h1>
    <form method="POST" action="">
        <h3>Prénom</h3>
        <input type="text" name="prénom">
        <br>
        <h3>Etat</h3>
        <input type="text" name="état">
        <br>
        <h3>Race</h3>
        <input type="text" name="race_id">
        <br><br>
        <input type="submit" name="Valider les infos">
        <br>
    </form>
</body>

</html>