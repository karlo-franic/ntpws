<!DOCTYPE html>
<html>
<head>
    <title>Funkcije</title>
</head>
<body>

<?php
    function add($x, $y) {
        $total = $x + $y;
        return "$x + $y = $total";
    }

    echo add(4,7);
?>

</body>
</html>