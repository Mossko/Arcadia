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
    header('Location: connexion2.php');
}

if (isset($_POST['Envoyer votre avis'])) {
    if (!empty($_POST['avis']) and !empty($_POST['amélioration'])) {
        $avis = htmlspecialchars($_POST['avis']);
        $amelioration = nl2br(htmlspecialchars($_POST['amélioration']));

        $InsérerAvis = $DDB->prepare('INSERT INTO rapport_veterinaire_(avis, amélioration) VALUES (? , ?)');
        $InsérerAvis->execute(array($avis, $amélioration));

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
    <title>Vétérinaire</title>
</head>

<body>

    <!--Avis-->

    <H1>Envoyez vos avis</H1>

    <form method="POST" action="">
        <h2>Jungle</h2>
        <input type="avis" name="avis" required>

        <textarea name="amélioration" required></textarea>
        <input type="submit" value="Envoyer votre avis">

    </form>


    <form method="POST" action="">
        <H2>Marais</H2>
        <input type="avis" name="avis" required>

        <textarea name="amélioration" required></textarea>
        <input type="submit" value="Envoyer votre avis">

    </form>


    <form method="POST" action="">
        <H2>Savane</H2>
        <input type="avis" name="avis" required>

        <textarea name="amélioration" required></textarea>
        <input type="submit" value="Envoyer votre avis">

    </form>

</body>

</html>