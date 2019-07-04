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
        <script src="https://kit.fontawesome.com/536fe6e8c5.js"></script>
        
    </head>
    <body id="body">
        <!--top of page-->
        <header>
            <!--menu-->
            <?php
                include("menu.php");
            ?>

            <!--carousel-->
            <?php
                include("carousel.php");
            ?>
            
        </header>
        <!--main-->
        <main class="all">
            <section>
                
                <article class="container__top">
                    <h1 class="title__site title__site--votre-coiffeur">Votre <strong>coiffeur barbier de liévin</strong></h1>
                    <div class="container__presentation container__presentation--primary">
                        <img class="presentation__img img-thumbnail animated flash" id="image-anim" src="img/coiffeur.jpg" alt="">
                            <p class="font__para font__para--primary">Situé au cœur de <strong>Liévin notre salon de coiffure</strong> est <em>ouvert à toutes et à tous, dans le respect et la bonne humeur</em> nous vous accueillons afin que vos passages soit des plus <em>agréable</em> possible.<br>
                            </p>
                    </div>
                    <div class="container__presentation container__presentation--secondary">
                        <img class="presentation__img img-thumbnail animated flash" src="img/fauteuil.jpg" alt="">
                            <p class="font__para font__para--secondary">Un <em>shampoing</em> avec massage du cuir chevelu vous ravirez n'est-ce pas? Chez <strong>first line</strong> nous mettons en plus un fauteuil massant a votre disposition, votre petit shampoing sera plus immersif et relaxant vous verrez.</p>
                    </div>
                    <div class="container__presentation container__presentation--third">
                        <img class="presentation__img img-thumbnail animated flash" src="img/coiffeur2.png" alt="">
                            <p class="font__para font__para--primary">C'est l'heure de se faire chouchouter! <em>Passionner par notre métier</em> nous vous garantissons une coupe bien réalisé. Nous avons été formés par les plus grands dans le but de vous apporter <em>entière satisfaction</em> lors votre passage! Vous êtes indécis(e) sur le choix de votre coupe? Prenez le temps de regarder nos catalogues, vous y trouverez votre bonheur.</p>
                    </div>
                    
                    <div class="container__presentation container__presentation--fours">
                        <img class="presentation__img img-thumbnail animated flash" src="img/barbe.jpg" alt="">
                            <p class="font__para font__para--secondary">Votre <strong>barbe<strong> est l'un de vos atouts les plus précieux? Alors pourquoi l'entretenir vous-même? Chez votre <strong>barbier first line à Liévin</strong> nous taillons votre barbe selon des modeles tendance, le cadre et l'ambiance du salon vous permet de mieux vous projeter lors de votre passage devant le miroir.</p>
                    </div>
                </article>
            </section>
            <!--google-map-->
            <section class="container__map">
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