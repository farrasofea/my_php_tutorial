<?php

/*
An array allows us to store multiple values
inside a single variable.

Example:

$people = ["Shan", "Crystal", "Rayu"];

Instead of creating:

$name1 = "Shan";
$name2 = "Crystal";
$name3 = "Rayu";

we can store them together in one array.


PHP has 3 main types of arrays:

1. Indexed Arrays
2. Associative Arrays
3. Multi-dimensional Arrays

This tutorial covers Indexed and Associative
Arrays. Multi-dimensional arrays are covered
in the next tutorial.


                INDEXED ARRAYS
Indexed arrays use numbers as indexes.

Example:

$people = ["Shan", "Crystal", "Rayu"];

The indexes are:

0 = Shan
1 = Crystal
2 = Rayu

IMPORTANT:
PHP arrays start counting from 0.


To access a specific value:

echo $people[1];

Output:
Crystal


Another way to create an array:

$people = array("Shan", "Crystal", "Rayu");


Arrays can contain different data types.

Example:

$ages = [20, 30, 40, 50];


We cannot use echo to display the whole array.

echo $ages;

This will cause an error/warning because echo
cannot directly display an entire array.


Use print_r() to display an array in a readable format.

print_r($ages);


              OVERWRITING VALUES
We can change an existing value using its index.

Example:

$ages = [20, 30, 40, 50];

$ages[1] = 25;

Now the array becomes:

20, 25, 40, 50


                ADDING VALUES
We can add a new value to the end of an array using empty square brackets.

Example:

$ages[] = 60;

PHP automatically adds it to the next index.


We can also use array_push():

array_push($ages, 70);

This adds 70 to the end of the array.


                  COUNT()
count() is used to count the number of elements
inside an array.

Example:

echo count($ages);


               MERGING ARRAYS
array_merge() is used to combine two arrays.

Example:

$people3 = array_merge($people1, $people2);

This combines the values from both arrays
into one array.


             ASSOCIATIVE ARRAYS
Associative arrays use KEY-VALUE pairs instead of numbered indexes.

Example:

$ninjas = [
    "Shan" => "Black",
    "Mario" => "Orange",
    "Luigi" => "Brown"
];


The structure is:

"key" => "value"


Example:

"Shan" => "Black"

Shan = key
Black = value


To access a value, use its key:

echo $ninjas["Mario"];

Output:
Orange


We can print the whole associative array using:

print_r($ninjas);


          ADDING ASSOCIATIVE VALUES
We can add a new key-value pair:

$ninjas["Toad"] = "Pink";


        OVERWRITING ASSOCIATIVE VALUES
We can change an existing value:

$ninjas["Peach"] = "Pink";


             COUNT ASSOCIATIVE ARRAY
count() can also be used with associative arrays.

Example:

echo count($ninjas);

Each key-value pair counts as ONE element.


             IMPORTANT FUNCTIONS

print_r()
→ Displays an array in a readable format.

count()
→ Counts the number of elements in an array.

array_push()
→ Adds a value to the end of an array.

array_merge()
→ Combines two or more arrays.


        INDEXED VS ASSOCIATIVE ARRAYS

INDEXED ARRAY:

$people = [
    "Shan",
    "Crystal",
    "Rayu"
];

Uses numbers as indexes:

0 = Shan
1 = Crystal
2 = Rayu


ASSOCIATIVE ARRAY:

$ninjas = [
    "Shan" => "Black",
    "Mario" => "Orange",
    "Luigi" => "Brown"
];

Uses keys instead of numbered indexes.


REMEMBER:

Indexed:
$people[0]

Associative:
$ninjas["Mario"]

*/

?>