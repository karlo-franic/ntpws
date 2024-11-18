<!DOCTYPE html>
<html>
<head>
    <title>Registracija</title>
</head>
<body>
<h1>Registration Form</h1>
<form action="" method="POST">
    <!-- Text input field -->
    <label for="firstname">First Name:*</label><br><br>
    <input type="text" id="firstname" name="firstname" required>
    <br><br>
    <label for="lastname">Last Name:*</label><br><br>
    <input type="text" id="lastname" name="lastname" required>
    <br><br>
    <label for="username">Username:*</label><br><br>
    <input type="text" id="username" name="username" required>
    <br><br>
    <label for="password">Password:*</label><br><br>
    <input type="password" id="password" name="password" required>
    <br><br>

    <!-- Submit button -->
    <input type="submit" value="Submit" name="submit">
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    $con=mysqli_connect("localhost", "root","","ntpws_zadaci");
    $query = "INSERT INTO users (firstname, lastname, username, password) VALUES ('".$_POST['firstname']."', '".$_POST['lastname']."', '".$_POST['username']."', '".$_POST['password']."');";
    $result = mysqli_query($con,$query);
    mysqli_close($con);
}
 ?>

</body>
</html>


