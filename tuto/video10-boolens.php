<?php

/*
BOOLEANS
A boolean is a data type that has only two values:

true
false

Booleans are commonly used with conditions.

Example:

If something is true → execute the code.
If something is false → don't execute the code.
*/


// Boolean values
echo true;    // Outputs 1
echo false;   // Outputs nothing


/*
When a boolean is echoed in PHP:

true  → 1
false → empty string

This is because the browser displays the value
as text.
*/


/*
COMPARISON OPERATORS

Comparisons return either TRUE or FALSE.

Common comparison operators:

<   Less than
>   Greater than
==  Equal to (loose comparison)
=== Equal to (strict comparison)
!=  Not equal to
<=  Less than or equal to
>=  Greater than or equal to
*/


// Less than
echo 5 < 10;      // true → 1

// Greater than
echo 5 > 10;      // false → nothing

// Equal to
echo 10 == 10;    // true → 1

// Not equal to
echo 5 != 10;     // true → 1

// Less than or equal to
echo 5 <= 5;      // true → 1

// Greater than or equal to
echo 5 >= 5;      // true → 1


/*
STRING COMPARISONS

Strings can also be compared.

PHP compares strings based on their character values.
*/

echo "Shan" < "Yoshi";   // true

/*
"S" comes before "Y" alphabetically,
so the comparison is true.
*/


/*
PHP is also case-sensitive when comparing strings.

Uppercase and lowercase letters are different.
*/


echo "Mario" == "Mario";   // true

echo "Mario" == "mario";   // false


/*
LOOSE VS STRICT COMPARISON

LOOSE COMPARISON:
Uses ==

It compares the values but does NOT require
the same data type.

STRICT COMPARISON:
Uses ===

It compares both:
1. Value
2. Data type
*/


// Loose comparison
echo 5 == "5";      // true

/*
5 is an integer.
"5" is a string.

With ==, PHP considers them equal.
*/


// Strict comparison
echo 5 === "5";     // false

/*
5 is an integer.
"5" is a string.

Different data types → false.
*/


// Both value and type are the same
echo 5 === 5;       // true


/*
WHY STRICT COMPARISON IS USEFUL

Strict comparison (===) is often safer because
it checks both the value and data type.

This reduces unexpected results caused by
automatic type conversion.
*/


/*
BOOLEAN AND LOOSE COMPARISON

In loose comparison:

true == 1
true == "1"

false == ""

These can evaluate to true because PHP converts
values when using loose comparison.

Strict comparison considers the data type too.
*/

echo true == "1";    // true

echo false == "";    // true


/*
SUMMARY

BOOLEAN
- Has two values: true and false.
- Used for conditions.

COMPARISONS
- <  → less than
- >  → greater than
- == → loose comparison
- === → strict comparison
- != → not equal
- <= → less than or equal
- >= → greater than or equal

LOOSE COMPARISON (==)
- Checks value.
- Does not require the same data type.

STRICT COMPARISON (===)
- Checks value AND data type.
- Usually safer when an exact match is needed.
*/
?>