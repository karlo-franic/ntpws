<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<title>SQL NAREDBE</title>
  </head>
  <style>
	body { margin: 10px;}
    h1 { font-size:24px; }
    h2 { margin-top:30px; font-size:18px; }
	
  </style>
<body>
<div class="container">
	<h1>UPDATE korisnika &rsaquo; DML </h1>
	<?php 
    $MySQL = mysqli_connect("localhost","root","","ntpws_zadaci") or die('Error connecting to MySQL server.');
    
    print '<h2>Users</h2>
        <hr style="border-bottom:1px solid grey">';

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $query  = "UPDATE users SET firstname='" . $_POST['firstname'] ."', lastname='" . $_POST['lastname'] ."' WHERE id=" . (int)$_GET['edit']; 
            $result = @mysqli_query($MySQL, $query);
    
            print '<p class="alert alert-warning">Podaci su uspješno izmjenjeni!</p>';

        }

        if (isset($_GET['edit']) && $_SERVER['REQUEST_METHOD'] != 'POST') {
            $query  = "SELECT firstname, lastname FROM users WHERE id=" . (int)$_GET['edit'];
            $result = @mysqli_query($MySQL, $query);
            $row = @mysqli_fetch_array($result);

            print '<a href="index.php" class="btn btn-light" style="margin-bottom:30px;">BACK</a>
            <form method="POST" id="MyForm">
                <div class="form-group">
                    <label for="ime">Ime:*</label>
                    <input type="text" id="ime" class="form-control" value="' . $row['firstname'] . '" name="firstname" required placeholder="Ime">
                </div>
                <div class="form-group">
                    <label for="prezime">Prezime:*</label>
                    <input type="text" id="prezime" class="form-control" value="' . $row['lastname'] . '" name="lastname" required placeholder="Prezime">
                </div>
                <div class="form-group">
                    <input type="submit" value="Pošalji" class="btn btn-primary">
                </div>
            </form>';
        }
        else {
            $query  = "SELECT * FROM users";
            $result = @mysqli_query($MySQL, $query);
            while($row = @mysqli_fetch_array($result)) {
                print "<p><a href=index.php?edit=". $row['id'] ."><i class='bi bi-pencil'></i></a> " . $row['firstname'] . " <span style='color:green'>" . $row['lastname'] . "</span></p>";
            }
        }
	   
	 ?>
</div>
</body>
</html>