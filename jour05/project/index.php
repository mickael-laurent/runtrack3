<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Accueil</title>
</head>
<body>
<?php if(isset($_SESSION['prenom'])): ?>
    <p>Bonjour <?php echo $_SESSION['prenom']; ?></p>
<?php else: ?>
    <a href="inscription.php">Inscription</a>
    <a href="connexion.php">Connexion</a>
<?php endif; ?>
</body>
</html>