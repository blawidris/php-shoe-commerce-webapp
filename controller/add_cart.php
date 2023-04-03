<?php

declare(strict_types=1);

session_start();

include_once dirname(__DIR__) . '/config/bootstrap.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $cartItem = json_decode($_POST['cart'], true);

    addItem($cartItem);
}
