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

if (isset($_POST['Envoyer votre avis'])) {
    if (!empty($_POST['pseudo']) and !empty($_POST['comentaire'])) {
        $avis = htmlspecialchars($_POST['peudo']);
        $comentaire = nl2br(htmlspecialchars($_POST['comentaire']));

        $InsérerAvis = $DDB->prepare('INSERT INTO avis(pseudo, comentaire, isvisible) VALUES (? , ? , ?)');
        $InsérerAvis->execute(array($avis, $comentaire));

        echo "Votre avis a été envoyer";
    } else {
        echo "Veuillez compléter tout les champs...";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Publier Avis</title>
</head>

<body>
    <form method="POST" action="">
        <input type="text" name="Pseudo">
        <br>
        <textarea name="comentaire">Votre commentaire</textarea>
        <br>
        <input type="submit" name="Ennvoyer votre avis">
    </form>
</body>

</html>