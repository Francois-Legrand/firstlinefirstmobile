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
        </header>
        <!--main-->
        <main class="all">
            <!--carousel-->
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="pause">
                <ol class="carousel-indicators">
                    <!--indique l'ordre de déroulement des carousels-->
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="container__picture">
                            <h3 class="title__site">Nos produits</h3>
                            <div class="slide__picture">
                                <img  src="img/produits/BiolageRAWPDP8.png" class="d-block w-300px" alt="Biolage raw pdp8">
                            </div>

                            <div class="slide__picture">
                                <img  src="img/produits/BiolageRAWPDP4.png" class="d-block w-300px" alt="Biolage raw pdp4">
                            </div>

                            <div class="slide__picture">
                                <img  src="img/produits/BiolageRAWPDP5.png" class="d-block w-300px" alt="biolage raw pdp5">
                            </div>

                            <div class="slide__picture">
                                <img  src="img/produits/BiolageRAWPDP6.png" class="d-block w-300px" alt="biolage raw pdp6">
                            </div>

                            <div class="slide__picture">
                                <img  src="img/produits/BiolageRAWPDP9.png" class="d-block w-300px" alt="biolage raw pdp9">
                            </div>

                            <div class="slide__picture">
                                <img  src="img/produits/Total_Results_So_Long_Damage_Conditioner_TR-SLD-C.png" class="d-block w-300px" alt="Total Results So Long Damage Conditioner TR-SLD-C">
                            </div>

                            <div class="slide__picture">
                                <img  src="img/produits/Total_Results_Moisture_Me_Rich_Conditioner_TR-MMR-C.png" class="d-block w-300px" alt="Total Results Moisture Me Rich Conditioner TR-MMR-C">
                            </div>

                            <div class="slide__picture">
                                <img  src="img/produits/Total_Results_Moisture_Me_Rich_Shampoo_TR-MMR-S.png" class="d-block w-300px" alt="Total Results Moisture Me Rich Shampoo TR-MMR-S">
                            </div>

                            <div class="slide__picture">
                                <img  src="img/produits/Total_Results_So_Long_Damage_Break_Fix_TR-SLD-BF.png" class="d-block w-300px" alt="Total Results So Long Damage Break Fix TR-SLD-BF">
                            </div>

                            <div class="slide__picture">
                                <img  src="img/produits/Total_Results_Curl_Please_Conditioner_TR-CP-C.png" class="d-block w-300px" alt="Total Results Curl Please Conditioner TR-CP-C">
                            </div>

                            <div class="slide__picture">
                                <img  src="img/produits/Total_Results_Curl_Please_Shampoo_TR-CP-S.png" class="d-block w-300px" alt="Total Results Curl Please ShampooTR-CP-S">
                            </div>

                            <div class="slide__picture">
                                <img  src="img/produits/Total_Results_Curl_Please_Super_Defrizzer_TR-CP-SD.png" class="d-block w-300px" alt="Total Results Curl Please Super Defrizzer TR-CP-SD">
                            </div>

                            <div class="slide__picture">
                                <img  src="img/produits/Total_Results_So_Long_Damage_Shampoo_TR-SLD-S.png" class="d-block w-300px" alt="Total Results So Long Damage Shampoo TR-SLD-S">
                            </div>

                            <div class="slide__picture">
                                <img  src="img/produits/Total_Results_Hello_Blondie_Flash_Filler_TR-HB-FF.png" class="d-block w-300px" alt="Total Results Hello Blondie Flash Filler TR-HB-FF">
                            </div>

                            <div class="slide__picture">
                                <img  src="img/produits/Total_Results_Hello_Blondie_Shampoo_TR-HB-S.png" class="d-block w-300px" alt="Total Results Hello Blondie Shampoo TR-HB-S.png">
                            </div>

                            <div class="slide__picture">
                                <img  src="img/produits/Total_Results_High_Amplify_Conditioner_TR-HA-C.png" class="d-block w-300px" alt="Total Results High Amplify Conditioner TR-HA-C">
                            </div>

                            <div class="slide__picture">
                                <img  src="img/produits/Total_Results_High_Amplify_Shampoo_TR-HA-S.png" class="d-block w-300px" alt="Total Results High Amplify Shampoo TR-HA-S">
                            </div>

                            <div class="slide__picture">
                                <img  src="img/produits/Total_Results_Mega_Sleek_Shampoo_TR-MS-S.png" class="d-block w-300px" alt="Total Results Mega Sleek Shampoo TR-MS-S">
                            </div>
                        </div>
                    </div>
                </div>
                <!--bouton de déroulement des carousels-->
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="fa fa-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="fa fa-chevron-right #2BA9E1" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
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