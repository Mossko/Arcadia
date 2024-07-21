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

if (isset($_GET['names']) and !empty($_GET['names'])) {
    $getid = $_GET['names'];

    $recupconso = $DDB->prepare('SELECT * FROM consommation WHERE names =  ?');
    $recupconso->execute(array($getid));

    if ($recupconso->rowCount() > 0) {
        $consoInfos = $recupconso->fetch();
        $date = $consoInfos['dates'];
        $nourriture = $consoInfos['nourriture'];
        $quantité = $consoInfos['quantité'];


        if (isset($_POST['Envoyer modifications'])) {
            $date_saisi = htmlspecialchars($_POST['date']);
            $nourriture_saisi = htmlspecialchars($_POST['nourriture']);
            $quantité_saisi = htmlspecialchars($_POST['quantité']);

            $updateConso = $DDB->prepare('UPDATE consommation SET dates = ?, nourriture = ?, quantité = ? WHERE service_id = ?');
            $updateConso->execute(array($date_saisi, $nourriture_saisi, $quantité_saisi, $getid));
            header('Location: consoAnimal.php');
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
    <title>Modifications conso Animal</title>
</head>

<body>
    <form method="POST" action="">
        <input type="date" name="date" value="<?= $date; ?>">
        <br>
        <input type="text" name="quantité" value="<?= $quantité; ?>">
        <br>
        <textarea name="nourriture">
          <?= $nourriture; ?>
        </textarea>
        <br><br>
        <input type="submit" name="Envoyer modifications">
    </form>
</body>

</html>