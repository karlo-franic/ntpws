<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slika i tekst</title>
    <style>
        .container {
            display: flex;
            align-items: flex-start;
            gap: 1%;
        }

        .container img {
            max-width: 30%; /* Postavite veličinu slike po potrebi */
            height: auto;
        }

        .text {
            max-width: 65%; /* Osigurava da tekst zauzme odgovarajući prostor */
        }

        .video {
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <h1>Naslov teksta</h1>
    <div class="container">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSdG8AYXH0Q_nwpL8ZKvT88Oz8aBylMBpIMBg&s" alt="Primjer slike">
        <div class="text">
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem 
                accusantium doloremque laudantium, totam rem aperiam, eaque 
                ipsa quae ab illo inventore veritatis et quasi architecto 
                beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem 
                quia voluptas sit aspernatur aut odit aut fugit, sed quia 
                consequuntur magni dolores eos qui ratione voluptatem sequi 
                nesciunt. Neque porro quisquam est, qui dolorem ipsum quia 
                dolor sit amet, consectetur, adipisci velit, sed quia non 
                numquam eius modi tempora incidunt ut labore et dolore magnam 
                aliquam quaerat voluptatem. Ut enim ad minima veniam, quis 
                nostrum exercitationem ullam corporis suscipit laboriosam, 
                nisi ut aliquid ex ea commodi consequatur? Quis autem vel 
                eum iure reprehenderit qui in ea voluptate velit esse quam 
                nihil molestiae consequatur, vel illum qui dolorem eum fugiat 
                uo voluptas nulla pariatur?</p>
        </div>
    </div>
    <div class="video">
        <iframe 
            width="560" 
            height="315" 
            src="https://www.youtube.com/embed/6ktny7tGepA?si=etAZWJvMlFADeRPH" 
            title="YouTube video player" 
            frameborder="0" 
            allow="accelerometer; autoplay; clipboard-write; 
               encrypted-media; gyroscope; 
               picture-in-picture; web-share" 
            allowfullscreen>
        </iframe>
    </div>
</body>
</html>