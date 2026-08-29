<?php
/*
Multi-dimensional arrays are arrays that contain other arrays inside them.

In simple words:
An array inside another array.

Example:
$blogs = [
    [ ... ],
    [ ... ],
    [ ... ]
];

Each element inside the outer array is another array.

EXAMPLE : 
A blog can contain several pieces of data, such as:
- title
- author
- content
- likes

Therefore, each blog can be stored as an array inside a bigger array.

Example :

$blogs = [
    [
        'title' => 'Mario Party',
        'author' => 'Mario',
        'content' => 'Lorem ipsum',
        'likes' => 30
    ],

    [
        'title' => 'Mario Kart Cheats',
        'author' => 'Toad',
        'content' => 'Lorem ipsum',
        'likes' => 25
    ],

    [
        'title' => 'Zelda Hidden Chests',
        'author' => 'Link',
        'content' => 'Lorem ipsum',
        'likes' => 50
    ]
];

The outer array is an indexed array because it uses indexes:
0, 1, 2, etc.

The inner arrays are associative arrays because they use key-value pairs.

ACCESSING DATA
- We can access a specific array using its index.

Example:

$blogs[1]

This accesses the second blog because array indexes start from 0.

To access a specific value inside the second blog, we can use its key.

Example :

echo $blogs[1]['author'];

Output:
Toad

Explanation:

$blogs[1]
= second blog

['author']
= gets the author value from that blog

COUNTING THE ARRAY
We can use the count() function to find how many elements are inside an array.

Example:

echo count($blogs);

If there are 3 blogs, the output is:

3

ADDING A NEW ARRAY
We can add a new element to the end of the array using empty square brackets.

Example:

$blogs[] = [
    'title' => 'Castle Party',
    'author' => 'Peach',
    'content' => 'Lorem ipsum',
    'likes' => 100
];

This adds a new blog to the end of
the $blogs array.


ARRAY POP
array_pop() is used to remove the last element from an array.

Example:

$popped = array_pop($blogs);

The last blog is removed from $blogs
and stored inside the $popped variable.

We can use print_r() to see the
removed array:

print_r($popped);


IMPORTANT!

- Multi-dimensional arrays contain arrays inside arrays.
- They are useful for storing related groups of data.
- The outer array can use indexes.
- The inner arrays can use keys and values.
- Array indexes start from 0.
- Use count() to count elements.
- Use array_pop() to remove the last element.

*/
?>