<?php

// Each product is an associative array.
// Each product has a name and a price.

$products = [
    ['name' => 'Shiny Star', 'price' => 20],
    ['name' => 'Green Shell', 'price' => 10],
    ['name' => 'Red Shell', 'price' => 15],
    ['name' => 'Golden Coin', 'price' => 5],
    ['name' => 'Lightning Bolt', 'price' => 40],
    ['name' => 'Banana Skin', 'price' => 2]
];

foreach ($products as $product) {

    // If the current product is Lightning Bolt,
    // completely exit the loop.
    if ($product['name'] === 'Lightning Bolt') {
        break;
    }

    // Display the product name.
    echo $product['name'] . '<br>';
}

foreach ($products as $product) {

    // If the price is greater than 15,
    // skip this product and move to the next one.
    if ($product['price'] > 15) {
        continue;
    }

    // Only products with a price of 15 or below
    // will be displayed.
    echo $product['name'] . '<br>';
}

foreach ($products as $product) {

    // Completely stop the loop when we reach Lightning Bolt.
    if ($product['name'] === 'Lightning Bolt') {
        break;
    }

    // Skip products that cost more than 15.
    if ($product['price'] > 15) {
        continue;
    }

    // Display the remaining products.
    echo $product['name'] . '<br>';
}

?>