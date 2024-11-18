<!DOCTYPE html>
<html>
<head>
    <title>SELECT</title>
</head>
<body>

<form action="" method="POST">
    <!-- Text input field -->
    <label for="userInput">Tražilica:</label>
    <input type="text" id="userInput" name="userInput" required>
    <br><br>

    <!-- Submit button -->
    <input type="submit" value="Submit" name="submit">
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    $con=mysqli_connect("localhost", "root","","ntpws_zadaci");
    $query = "SELECT firstname, lastname FROM users WHERE firstname LIKE '%".$_POST['userInput']."%' OR lastname LIKE '%".$_POST['userInput']."%'";
    $result = mysqli_query($con,$query);
    while($row = mysqli_fetch_array($result)) {
        echo "<p>".$row['firstname']." ".$row['lastname']."</p>"; 
    }
    mysqli_close($con);
}
 ?>

</body>
</html>


