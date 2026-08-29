<?php

/*
A string is a sequence of characters.
   Strings are used to store text such as names, sentences, emails and usernames.

Strings can use single quotes or double quotes.

   Example:
   $name = "Mario";
   $name = 'Mario';

We can output a string using echo.

   Example:
   echo "Hello World";

String concatenation means joining strings.
   PHP uses the dot (.) for concatenation.

   Example:
   $firstName = "Mario";
   $lastName = "Ninja";

   echo $firstName . " " . $lastName;

Variables can be concatenated with strings.

   Example:
   echo "My name is " . $name;

Double quotes allow variable interpolation.
   This means variables can be placed directly inside a double-quoted string.

   Example:
   echo "My name is $name";

Single quotes do not perform variable interpolation.

   Example:
   echo 'My name is $name';

   This displays $name as text.

Escape characters allow special characters to be used inside strings.

   Use a backslash (\) before the character.

   Example:
   echo "The ninja screamed \"Wow!\"";

We can use different types of quotes instead of escaping them.

   Example:
   echo 'The ninja screamed "Wow!"';

Individual characters can be accessed using square brackets [].

    Example:
    $name = "Mario";
    echo $name[0];

    Output:
    M

PHP uses zero-based indexing.

    Mario
    01234

    $name[0] = M
    $name[1] = a
    $name[2] = r

strlen()
    Finds the length of a string.

    Example:
    echo strlen("Mario");

    Output:
    5

strtoupper()
    Converts a string to uppercase.

    Example:
    echo strtoupper("Mario");

    Output:
    MARIO

strtolower()
    Converts a string to lowercase.

    Example:
    echo strtolower("MARIO");

    Output:
    mario

str_replace()
    Replaces characters or text inside a string.

    Syntax:
    str_replace(search, replace, string);

    Example:
    echo str_replace("M", "W", "Mario");

    Output:
    Wario

IMPORTANT:

- String = text inside quotes
- Concatenation = joining strings using .
- Interpolation = putting variables directly inside double quotes
- Escape character = \ 
- Indexing = accessing individual characters
- strlen() = find string length
- strtoupper() = uppercase
- strtolower() = lowercase
- str_replace() = replace text

*/
?>