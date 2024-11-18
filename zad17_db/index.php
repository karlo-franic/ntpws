<!DOCTYPE html>
<html>
<head>
    <title>SELECT users + countries</title>
</head>
<body>

<?php
$con=mysqli_connect("localhost", "root","","ntpws_zadaci");
$query = "SELECT firstname, lastname, country_name FROM users INNER JOIN countries ON users.country_code = countries.country_code";
$result = mysqli_query($con,$query);
while($row = mysqli_fetch_array($result)) {
    echo "<p>".$row['firstname']." ".$row['lastname']." (".$row['country_name'].")</p>"; 
}
mysqli_close($con);
 ?>

</body>
</html>
