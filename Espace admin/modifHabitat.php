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

if (isset($_GET['habitat_id']) and !empty($_GET['habitat_id'])) {
    $getid = $_GET['habitat_id'];

    $recuphabitat = $DDB->prepare('SELECT * FROM habitat WHERE habitat_id =  ?');
    $recuphabitat->execute(array($getid));

    if ($recuphabitat->rowCount() > 0) {
        $habitatInfos = $recuphabitat->fetch();
        $nom = $habitatInfos['nom'];
        $description = $habitatInfos['description'];
        $comentaire_habitat = $habitatInfos['comentaire_habitat'];

        if (isset($_POST['Envoyer modifications'])) {
            $nom_saisi = htmlspecialchars($_POST['nom']);
            $description_saisi = htmlspecialchars($_POST['description']);
            $comentaire_saisi = htmlspecialchars($_POST['comentaire_habitat']);

            $updateHabitat = $DDB->prepare('UPDATE service SET nom = ?, description = ?, comentaire_habitat = ? WHERE service_id = ?');
            $updateHabitat->execute(array($nom_saisi, $description_saisi, $comentaire_habitat, $getid));
            header('Location: habitatMod.php');
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
    <title>Modifications habitat</title>
</head>

<body>
    <form method="POST" action="">
        <input type="text" name="nom" value="<?= $nom; ?>">
        <br>
        <textarea name="description">
          <?= $description; ?>
        </textarea>
        <br><br>
        <input type="text" name="comentaire_habitat" value="<?= $comentaire_habitat; ?>">
        <br>
        <input type="submit" name="Envoyer modifications">
    </form>
</body>

</html>