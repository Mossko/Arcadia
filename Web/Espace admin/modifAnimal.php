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

if (isset($_GET['animal_id']) and !empty($_GET['animal_id'])) {
    $getid = $_GET['animal_id'];

    $recupanimal = $DDB->prepare('SELECT * FROM animal WHERE animal_id =  ?');
    $recupanimal->execute(array($getid));

    if ($recupanimal->rowCount() > 0) {
        $animalInfos = $recupanimal->fetch();
        $prénom = $animalInfos['prénom'];
        $état = $animalInfos['état'];

        if (isset($_POST['Envoyer modifications'])) {
            $prénom_saisi = htmlspecialchars($_POST['prénom']);
            $état_saisi = htmlspecialchars($_POST['état']);

            $updateanimal = $DDB->prepare('UPDATE service SET prénom = ?, état = ? WHERE service_id = ?');
            $updateanimal->execute(array($prénom_saisi, $état_saisi, $getid));
            header('Location: animalMod.php');
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
    <title>Modifications animal</title>
</head>

<body>
    <form method="POST" action="">
        <input type="text" name="prénom" value="<?= $prénom; ?>">
        <br>
        <textarea name="état">
          <?= $état; ?>
        </textarea>
        <br><br>
        <input type="submit" name="Envoyer modifications">
    </form>
</body>

</html>