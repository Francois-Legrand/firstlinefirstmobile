<!DOCTYPE html>
<html lang="fr">
    <head>
    <title>First-line</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="css/compiled-4.8.0.min.css">
        <link href="assets/css/font-awesome.css" rel="stylesheet">
        <link href="bootstrap-social.css" rel="stylesheet" >
        <link href="https://fonts.googleapis.com/css?family=Cormorant+Upright|Quicksand&display=swap" rel="stylesheet"> 
        <link rel="stylesheet" href="style.css">
    </head>
    <body id="body">
        <!--top of page-->
        <header>
            <!--menu-->
            <?php
                include("menu.php")
            ?>
            <!--carousel-->
            <?php
                include("carousel.php")
            ?>
        </header>
        <!--main-->
        <main class="all">
            <!--google-map-->
            <section class="container__map">
                <h2 class="title__site" id="trouver">Adresse</h2>
                <iframe id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2541.990993016255!2d2.7806738972483136!3d50.42263944643095!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47dd3a740d04a9d7%3A0x6da5f6f5c0c0dcb1!2s199+Rue+Jean+Baptiste+D%C3%A9fernez%2C+62800+Li%C3%A9vin!5e0!3m2!1sfr!2sfr!4v1560668175894!5m2!1sfr!2sfr" width="1400" height="900" frameborder="0" style="border:0" allowfullscreen></iframe>
            </section>
        </main>
        <!--footer-->
        <?php
            include("footer.php");
        ?>
    </body>
    <!--script-->
    <?php
        include("script.php");
    ?>
</html>