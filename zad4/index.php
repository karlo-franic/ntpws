<!DOCTYPE HTML>
    <html lang="hr">
        <head>
            <title>Programiranje web aplikacija</title>
            <meta http-equiv="content-type" content="text/html; charset=UTF-8">
            <meta name="description" content="">
            <meta name="keywords" content="">
            <meta name="author" content="Alen Šimec">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
        </head>
    <body> 
        <?php
            print '
            <form method="post" action="">
                <label for="a">Vrijednost a:</label><br>
                <input type="number" id="a" name="vrijednost_a">
                <hr>

                <label for="b">Vrijednost b:</label><br>
                <input type="number" id="b" name="vrijednost_b">
                <input type="submit" name="pošalji">
            </form>';
            echo 'vrijednost_a: ' . $_POST['vrijednost_a'];
            echo '<br>';
            echo 'vrijednost_b: ' . $_POST['vrijednost_b'];
            echo '<br>';
            echo 'c = ' . (3*$_POST['vrijednost_a'] - $_POST['vrijednost_b'])/2;
        ?>
    </body>