<!DOCTYPE html>
<html>
<body>

<?php
// case-sensitive constant name
define("GREETING", "Welcome to W3Schools.com!");
echo GREETING."<br/>";


// case-insensitive constant name
define("GREETING", "Welcome to W3Schools.com!", true);
echo greeting."<br/>";

// Create an Array constant
define("cars", [
    "Alfa Romeo",
    "BMW",
    "Toyota"
]);
echo cars[2]."<br/>";

// Create an Gobal Constant
define("GREETING", "Welcome to W3Schools.com!");

function myTest() {
    echo GREETING;
}
 
myTest();
?> 

</body>
</html>
