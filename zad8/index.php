<!DOCTYPE html>
<html>
<head>
    <title>For Each</title>
</head>
<body>

<?php
    echo "<p>Lista vozila:</p><ul>";
    $cars = array("Audi", "BMW", "Renault", "Citroen");
    foreach ($cars as $car) {
        echo "<li>$car</li>";
    }
    echo "</ul>";
?>

</body>
</html>