<?php
include 'includes/database.php';

$result = $conn->query("SELECT * FROM products");
?>
<section>
    <h1>Catalogue</h1>
    <ul>
        <?php while ($row = $result->fetch_assoc()): ?>
            <li>
                <h2><?= $row['name']; ?></h2>
                <p><?= $row['price']; ?> €</p>
                <a href="index.php?page=product_detail&id=<?= $row['id']; ?>">Détails</a>
            </li>
        <?php endwhile; ?>
    </ul>
</section>
