<!DOCTYPE html>
<html>
<body>

<?php
class Car {
    function Car() { // this is constructor
        $this->model = "VW";
    }
}
// create an object
$herbie = new Car();

// show object properties
echo $herbie->model;
?>

</body>
</html>
