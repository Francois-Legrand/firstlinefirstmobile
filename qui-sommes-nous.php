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
        <section>
            <article class="container__top">
                <h4 class="title__site" id="qui">Qui sommes-nous</h4>
                <div class="container__presentation">
                    <img class="presentation__img img-thumbnail animated flash" id="image-anim" src="img/coiffeur.jpg" alt="">
                    <div class="font__para">
                        <p>Capillairement Passionné, professionnelle jusqu'à la racine, souriante 365 jours par an, notre priorité est que votre passage chez nous soit un moment <em>agréable et relaxant</em>.</p>
                    </div>
                </div>
            </article>
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