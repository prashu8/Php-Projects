<?php
$x = 5;
$y = 10;

function myTest() {
    // also use global var like this
    $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
}

myTest();
echo $y; // outputs 15
?>