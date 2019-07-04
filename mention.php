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
                <h4 class="title__site" id="mention">Nos mentions légals</h4>
                <h4 class="title__site title__site--raison">Raison social</h4>
                <p class="font__para">SARL</p>
                <h4 class="title__site title__site--establishment">N° d'établissement (NIC)</h4>
                <p class="font__para">00014</p>
                <h4 class="title__site title__site--adress">Adresse de l'établissement</h4>
                <p class="font__para">199 RUE JEAN BAPTISTE DEFERNEZ</p>
                <h4 class="title__site title__site--siret">N° de SIRET</h4>
                <p class="font__para">51160860600014</p>
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