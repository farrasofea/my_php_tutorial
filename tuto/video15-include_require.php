<?php

// Include and require allow us to bring code
// from another PHP file into the current file.

// INCLUDE EXAMPLE
// This includes and runs the code from ninjas.php.

include('ninjas.php');

echo 'End of PHP <br>';

// REQUIRE EXAMPLE

// Require does the same basic job as include.

require('ninjas.php');
echo 'End of PHP <br>';

//include('missing_file.php');
//echo 'End of PHP';

//require('missing_file.php');
//echo 'End of PHP';

include 'ninjas.php';
require 'ninjas.php';

//inside html
include('content.php');
include('content.php');
include('content.php');

?>