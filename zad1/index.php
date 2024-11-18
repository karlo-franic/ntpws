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
            $auti = array('Mercedes', 'BMW', 'Audi', 'Citroen', 'Renalut', 'KIA');
            echo "Marke vozila:<ol><li>" . $auti[0] . "</li><li>" 
            . $auti[1] . "</li><li>" . $auti[2] . "</li><li>" . 
            $auti[3] . "</li><li>" . $auti[4] . "</li><li>" . 
            $auti[5] . "</li></ol>";
        ?>
    </body>