<!--Sécuriser la page -->
<?php
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

if (isset($_GET['avis_id']) and !empty($_GET['avis_id'])) {
    $getid = $_GET['avis_id'];
    $recupAvis = $DDB->prepare('SELECT * FROM avis WHERE comentaire = ?');
    $recupAvis->execute(array($getid));
    if ($recupAvis->rowCount() > 0) {
        $deleteAvis = $DDB->prepare('DELETE FROM avis WHERE comentaire  = ?');
        $deleteAvis->execute(array($getid));
        header('Location: Avis.php');
    } else {
        echo " Aucun article trouvé ";
    }
} else {
    echo "Aucun avis trouvé";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


</body>

</html>