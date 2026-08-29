<?php

// strtoupper() is a built-in PHP function.
// It converts a string into uppercase letters.

echo strtoupper('hello world');

// TUTORIAL 13: FUNCTIONS

// This function is called sayHello.
// The code inside the curly brackets runs
// when the function is called.

/*function sayHello() {

    echo 'Good morning Yoshi';

}

// Creating a function does not automatically run it.
// We need to call or invoke the function.

sayHello();

//You can call the same function multiple times
function sayHello() {

    echo 'Good morning Yoshi <br>';

}

sayHello();
sayHello();
sayHello();*/

// $name is called a parameter.
// It receives the value that we pass into the function.

/*function sayHello($name) {

    echo "Good morning $name";

}

// 'Mario' is called an argument.
sayHello('Mario'); */


// If no name is provided,
// PHP will use 'Shaun' as the default value.

function sayHello($name = 'Shaun') {

    echo "Good morning $name";

}

sayHello();

// This function receives a product array.

/*function formatProduct($product) {

    // Curly brackets allow us to access array values
    // inside a double-quoted string.

    echo "{$product['name']} costs £{$product['price']} to buy <br>";

}

// Pass an associative array into the function.

formatProduct([
    'name' => 'Gold Star',
    'price' => 20
]); */

function formatProduct($product) {

    // Instead of displaying the result,
    // return sends the value back to where
    // the function was called.

    return "{$product['name']} costs £{$product['price']} to buy";
}


// Store the returned value inside a variable.

$formatted = formatProduct([
    'name' => 'Gold Star',
    'price' => 20
]);


// We can use the returned value later.

echo $formatted;

// The function has two parameters.
// Both parameters have default values.

//function sayHello($name = 'Shaun', $time = 'morning') {

//    echo "Good $time $name";

//}


// No arguments are passed,
// so the default values are used.

//sayHello();

?>