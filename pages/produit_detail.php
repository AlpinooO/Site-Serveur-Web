<?php
include 'includes/database.php';

$id = $_GET['id'];
$stmt = $conn->prepare("SELECT * FROM products WHERE id = ?");
$stmt->bind_param('i', $id);
$stmt->execute();
$result = $stmt->get_result();
$product = $result->fetch_assoc();
?>
<section>
    <h1><?= $product['name']; ?></h1>
    <p><?= $product['description']; ?></p>
    <p>Prix : <?= $product['price']; ?> €</p>
    <form method="post" action="cart_handler.php">
        <input type="hidden" name="product_id" value="<?= $product['id']; ?>">
        <button type="submit">Ajouter au panier</button>
    </form>
</section>
