<?php

function getAllProduct()
{
    $filePath = file_get_contents(PUBLIC_PATH . '/products.json');

    $fileContent =  json_decode($filePath);

    $products = $fileContent->products;

    return $products;
}


function getById($prodId)
{
    $singleProduct = array();

    $products = getAllProduct();

    foreach ($products as $id => $item) {
        if ($prodId == $id) {

            $singleProduct['id'] = $prodId;
            $singleProduct['name'] = $item->name;
            $singleProduct['price'] = $item->price;
            $singleProduct['image'] = $item->image;
            $singleProduct['description'] = $item->description;
            $singleProduct['category'] = $item->category;
            $singleProduct['available'] = $item->available;
        }
    }

    return $singleProduct;
}
