<?php

/*

Variables
   - Variables store information, values or data.
   - PHP variables start with a dollar sign ($).

   Example:
   $name = "Yoshi";
   $age = 30;

Accessing variables
   - Use the variable name with $.

   Example:
   echo $name;

Variable naming rules
   - Must start with a letter or underscore.
   - Cannot start with a number.
   - Numbers can be used after the first character.
   - Avoid special characters.
   - Camel case can be used for multiple words.

   Example:
   $firstName = "Yoshi";

Strings
   - Strings are text inside single or double quotes.

   Example:
   $name = "Yoshi";

Integers
   - Integers are whole numbers.
   - They do not need quotation marks.

   Example:
   $age = 30;

Variables can be overwritten.

   Example:
   $name = "Yoshi";
   $name = "Mario";

   echo $name;

   Output:
   Mario

Comments
   - Comments are not executed by PHP.
   - Use // for single-line comments.

   Example:
   // This is a comment

Constants
   - Constants store values that should not be changed.
   - Constants are created using define().

   Example:
   define("NAME", "Yoshi");

- Constants are usually written in uppercase so they are easy to recognise.

- Constants do not use $.

   Variable:
   $name

   Constant:
   NAME

- Constants cannot be overwritten.

   Example:
   define("NAME", "Yoshi");

   echo NAME;
*/
?>