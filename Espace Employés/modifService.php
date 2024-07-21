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

if (isset($_GET['service_id']) and !empty($_GET['service_id'])) {
    $getid = $_GET['service_id'];

    $recupservice = $DDB->prepare('SELECT * FROM service WHERE service_id =  ?');
    $recupservice->execute(array($getid));

    if ($recupservice->rowCount() > 0) {
        $serviceInfos = $recupservice->fetch();
        $nom = $serviceInfos['nom'];
        $description = $serviceInfos['description'];

        if (isset($_POST['Envoyer modifications'])) {
            $nom_saisi = htmlspecialchars($_POST['nom']);
            $description_saisi = nl2br(htmlspecialchars($_POST['description']));

            $updateService = $DDB->prepare('UPDATE service SET nom = ?, description = ? WHERE service_id = ?');
            $updateService->execute(array($nom_saisi, $description_saisi, $getid));
            header('Location: servicesMod.php');
        }
    } else {
        echo "Aucun article trouvé";
    }
} else {
    echo "Auncun id trouvé ";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modiifications services</title>
</head>

<body>
    <form method="POST" action="">
        <input type="text" name="nom" value="<?= $nom; ?>">
        <br>
        <textarea name="description">
          <?= $description; ?>
        </textarea>
        <br><br>
        <input type="submit" name="Envoyer modifications">
    </form>
</body>

</html>