
<?php
session_start();
if (!isset($_SESSION["user_id"])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
</head>
<body>

<h2>Bienvenue, <?php echo htmlspecialchars($_SESSION["email"]); ?> !</h2>
<a href="logout.php">Déconnexion</a>

</body>
</html>
