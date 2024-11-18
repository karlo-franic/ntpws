<!DOCTYPE html>
<html>
<head>
    <title>Prosjek ocjene</title>
</head>
<body>

<form method="post" action="">
    <label for="ocjena1">Enter first number:</label>
    <input type="number" step="any" id="ocjena1" name="ocjena1" required><br><br>

    <label for="ocjena2">Enter second number:</label>
    <input type="number" step="any" id="ocjena2" name="ocjena2" required><br><br>

    <input type="submit" name="submit" value="Calculate">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the numbers from the form input
    $ocjena1 = $_POST['ocjena1'];
    $ocjena2 = $_POST['ocjena2'];

    // Print each number
    echo "<p>Ocjena prvog kolokvija: $ocjena1</p>";
    echo "<p>Ocjena drugog kolokvija: $ocjena2</p>";

    // Calculate the average
    $average = ($ocjena1 + $ocjena2) / 2;

    // Print the average
    echo "<p>Prosjek: $average</p>";

    // Calculate and print the rounded average
    $roundedAverage = round($average);
    echo "<p>Konačna ocjena: $roundedAverage</p>";
}
?>

</body>
</html>