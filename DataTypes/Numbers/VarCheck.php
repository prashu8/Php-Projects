<!DOCTYPE html>
<html>
<body>

<?php
// Check if the type of a variable is integer   
$x = 5985;
var_dump(is_int($x));

echo "<br>";

// Check again... 
$x = 59.85;
var_dump(is_int($x));

echo "<br>";

$x = 10.365;
var_dump(is_float($x));

echo "<br>";

$x = 1.9e411;
var_dump($x);
?>  
?>  

</body>
</html>
