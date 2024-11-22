<?php
if (!isset($_SESSION['cart'])) $_SESSION['cart'] = [];
?>
<section>
    <h1>Votre panier</h1>
    <ul>
        <?php foreach ($_SESSION['cart'] as $item): ?>
            <li><?= $item['name']; ?> - <?= $item['price']; ?> €</li>
        <?php endforeach; ?>
    </ul>
</section>
