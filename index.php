<?php
session_start();

$page = $_GET['page'] ?? 'home';
include 'includes/header.php';

switch ($page) {
    case 'catalogue':
        include 'pages/catalogue.php';
        break;
    case 'product_detail':
        include 'pages/product_detail.php';
        break;
    case 'login':
        include 'pages/login.php';
        break;
    case 'register':
        include 'pages/register.php';
        break;
    case 'cart':
        include 'pages/cart.php';
        break;
    default:
        include 'pages/home.php';
        break;
}

include 'includes/footer.php';
?>
