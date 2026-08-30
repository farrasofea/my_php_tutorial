<?php

// TUTORIAL 14: VARIABLE SCOPE

//function myFunc() {

    // This variable has local scope.
    // It can only be accessed inside myFunc().
    //$price = 10;

  //  echo $price;

//}

//myFunc();

function myFunc($age) {

    // $age is a local variable inside this function.
    echo $age;

}

myFunc(25);

// This variable has global scope.

$name = 'Mario';

/*function sayHello() {

    echo "Hello";

}

sayHello();

echo $name;

$name = 'Mario';*/

function sayHello() {

    // Use the global variable.
    global $name;

    // Change the global variable.
    $name = 'Yoshi';

    echo "Hello $name";

}

sayHello();

echo '<br>';

// The original global variable has also changed.
echo $name;

/*$name = 'Mario';

function sayBye($name) {

    echo "Bye $name";

}

sayBye($name);*/

/*$name = 'Mario';

function sayBye($name) {

    // This only changes the local variable.
    $name = 'Wario';

    echo "Bye $name";

}

sayBye($name);

echo '<br>';

// The original variable is still Mario.
echo $name;*/

$name = 'Mario';

function sayBye(&$name) {

    // Because $name is passed by reference,
    // changing it here also changes the original variable.
    $name = 'Wario';

    echo "Bye $name";

}

sayBye($name);

echo '<br>';

// The original variable has now changed too.
echo $name;

?>