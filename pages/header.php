<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <title>E-commerce</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Accueil</a></li>
                <li><a href="index.php?page=catalogue">Catalogue</a></li>
                <li><a href="index.php?page=cart">Panier</a></li>
                <?php if (isset($_SESSION['user'])): ?>
                    <li>Bienvenue, <?= $_SESSION['user']; ?> (<a href="logout.php">Déconnexion</a>)</li>
                <?php else: ?>
                    <li><a href="index.php?page=login">Connexion</a></li>
                    <li><a href="index.php?page=register">Inscription</a></li>
                <?php endif; ?>
            </ul>
        </nav>
    </header>
