<!DOCTYPE html>
<html>
<head>
    <title>For Each</title>
</head>
<body>

<?php
    $post_br = array("Zagreb" => 10000, "Split" => 21000, "Rijeka" => 51000);
    echo "<ul>";
    foreach ($post_br as $grad => $broj) {
        echo "<li>$car - $broj</li>";
    }
    echo "</ul>";
?>

</body>
</html>