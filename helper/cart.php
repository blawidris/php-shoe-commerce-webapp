<?php

declare(strict_types=1);

// $_SESSION['cart_item'] = array();

function addItem($data)
{
    // global $itemArray;

    $itemArray = array();


    $prodId = $data['id'];
    $prodName = $data['name'];
    $prodPrice = $data['price'];
    $prodImage = $data['image'];
    $prodQuantity = $data['quantity'];

    // store item in array
    $itemArray[$prodId] = array(
        "name" => $prodName,
        "price" => $prodPrice,
        "quantity" => $prodQuantity,
        "image" => $prodImage,
        "id" => $prodId,
    );

    if (empty($_SESSION['cart_item'])) {
        $_SESSION['cart_item'] = $itemArray;
        return;
    }

    $cartKey = array_keys($_SESSION['cart_item']);

    if (in_array($prodId, $cartKey)) {

        foreach ($_SESSION['cart_item']  as $k => $value) {
            if ($prodId == $k) {
                $_SESSION['cart_item'][$k]['quantity'] = $prodQuantity;
            }
        }
    } else {
        $_SESSION["cart_item"] = array_merge($_SESSION["cart_item"], $itemArray);
    }


    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json');
    header('Access-Control-Allow-Methods: POST');
    header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');
    echo json_encode(['status' => 200, 'total_item' => count($_SESSION['cart_item'])]);
}


function removeItem($data)
{
    $prodId = $data['id'];

    if (!empty($_SESSION["cart_item"])) {
        foreach ($_SESSION["cart_item"] as $k => $v) {
            if ($prodId == $k)
                unset($_SESSION["cart_item"][$k]);
            if (empty($_SESSION["cart_item"]))
                unset($_SESSION["cart_item"]);
        }
    }

    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json');
    header('Access-Control-Allow-Methods: POST');
    header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');
    echo json_encode(['status' => 200, 'total_item' => count($_SESSION['cart_item'])]);
}


function emptyCart()
{
    unset($_SESSION["cart_item"]);

    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json');
    header('Access-Control-Allow-Methods: POST');
    header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');
    echo json_encode(['status' => 200, 'total_item' => count($_SESSION['cart_item'])]);
}
