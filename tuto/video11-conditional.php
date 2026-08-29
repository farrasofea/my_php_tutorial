<?php

// Conditional statements allow our program to make decisions.
// Depending on whether a condition is true or false,
// PHP can execute different blocks of code.

// ----------------------------------------
// BASIC IF / ELSE STATEMENT
// ----------------------------------------

$price = 20;

// Check whether the price is less than 30.
if ($price < 30) {

    // This code runs if the condition is true.
    echo "Condition is met";

} else {

    // This code runs if the condition is false.
    echo "Condition is not met";
}


// ----------------------------------------
// IF / ELSEIF / ELSE
// ----------------------------------------

// PHP checks conditions from top to bottom.
// Once it finds a true condition, it runs that block
// and skips the remaining conditions.

$price = 20;

if ($price < 10) {

    echo "First condition is met";

} elseif ($price < 30) {

    echo "Elseif condition is met";

} else {

    // This is the catch-all option when none
    // of the previous conditions are true.
    echo "Condition is not met";
}

// Each product is an associative array.
// The products array contains multiple products.

$products = [
    ['name' => 'Shiny Star', 'price' => 20],
    ['name' => 'Green Shell', 'price' => 10],
    ['name' => 'Red Shell', 'price' => 15],
    ['name' => 'Golden Coin', 'price' => 5],
    ['name' => 'Lightning Bolt', 'price' => 40],
    ['name' => 'Banana Skin', 'price' => 2]
];

// Loop through every product.
foreach ($products as $product) {

    // Only display products costing less than 15.
    if ($product['price'] < 15) {

        echo $product['name'] . '<br />';

    }
}

foreach ($products as $product) {

    // The price must be LESS than 15
    // AND GREATER than 2.
    if ($product['price'] < 15 && $product['price'] > 2) {

        echo $product['name'] . '<br />';

    }
}
foreach ($products as $product) {

    // Display the product if its price is over 20
    // OR if its price is less than 10.
    if ($product['price'] > 20 || $product['price'] < 10) {

        echo $product['name'] . '<br />';

    }
}

$products = [
    ['name' => 'Shiny Star', 'price' => 20],
    ['name' => 'Green Shell', 'price' => 10],
    ['name' => 'Red Shell', 'price' => 15],
    ['name' => 'Golden Coin', 'price' => 5],
    ['name' => 'Lightning Bolt', 'price' => 40],
    ['name' => 'Banana Skin', 'price' => 2]
];

?>

<div>
    
    <?php foreach ($products as $product) { ?>

        <?php if ($product['price'] > 15) { ?>

            <!-- Only products over 15 will appear here -->
            <li>
                <?php echo $product['name']; ?>
            </li>

        <?php } ?>

    <?php } ?>

</div>